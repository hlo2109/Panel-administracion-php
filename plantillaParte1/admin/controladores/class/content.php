<?php 

    class content extends config{
        function __construct(){

        }

        function create($data){
            $validation  = $this->validator()->make($data,[
                'name' => 'required',
                'slug' => 'required'
            ]);
            $validation->validate();
            if ($validation->fails()) {
                $error = $validation->errors()->all();
                $this->message($error,false); 
                return ["state"=>false];
            }  

            $nameImage = "";
            if(isset($_FILES["file"]) && $_FILES["file"]["name"]){
                $tmp_name = $_FILES["file"]["tmp_name"];
                $name = $_FILES["file"]["name"];
                $size = $_FILES["file"]["size"];
                $multimedia = new multimedia();
                $nameImage = $multimedia->loadFile($tmp_name, $name, $size);
            }

            self::$db->insert("contents",[
                "id_user" => $_SESSION["admin"]["id"],
                "name"=>$data["name"],
                "slug"=>$data["slug"],
                "id_category"=>$data["id_category"],
                "content"=> $data["content"],
                "description"=>$data["description"],
                "tags"=>$data["tags"],
                "image" => $nameImage,
                "date_create"=>date("Y-m-d H:i:s")
            ]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Contenido creado correctamente."]);
                return ["state"=>true];
            }  
        }
        function select($id){
            return self::$db->get("contents","*",["id"=>$id]);
        }
        function update($data, $id){
            
            $validation  = $this->validator()->make($data,[
                'name' => 'required',
                'slug' => 'required'
            ]);
            $validation->validate();
            if ($validation->fails()) {
                $error = $validation->errors()->all();
                $this->message($error,false); 
                return ["state"=>false];
            }
            $dataSend = [                
                "name"=>$data["name"],
                "slug"=>$data["slug"],
                "id_category"=>$data["id_category"],
                "content"=> $data["content"],
                "description"=>$data["description"],
                "tags"=>$data["tags"],
                "date_update"=>date("Y-m-d H:i:s")
            ];
            if(isset($_FILES["file"]) && $_FILES["file"]["name"]){
                $tmp_name = $_FILES["file"]["tmp_name"];
                $name = $_FILES["file"]["name"];
                $size = $_FILES["file"]["size"];
                $multimedia = new multimedia();
                $nameImage = $multimedia->loadFile($tmp_name, $name, $size);
                $dataSend += ["image"=>$nameImage];
            }
            self::$db->update("contents", $dataSend, ["id"=>$id]);

            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Contenido editado correctamente."]);
                return ["state"=>true];
            }  
        }

        function delete($data){
            self::$db->delete("contents",["id"=>$data["id"]]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Contenido eliminado correctamente."]);
                return ["state"=>true];
            } 
        }

        function list(){
            $totalResultados = 10;
            $pag = isset($_GET["pag"])?$_GET["pag"]:1;
            $search = isset($_GET["search"])?$_GET["search"]:null; 
            
            $cantida =  self::$db->select("contents(ct)",
                [
                    "[><]categories(c)" => ["ct.id_category"=>"id"]
                ],
                [
                    "ct.id",
                    "ct.name",
                    "ct.description",
                    "c.name(category)"                    
                ],
                self::$db::raw("where 
                ( 
                    UPPER(ct.name) like UPPER('%".$search."%') OR 
                    UPPER(ct.description) like UPPER('%".$search."%') OR 
                    UPPER(c.name) like UPPER('%".$search."%')
                )             
                order by ct.name asc  
                ")
            ); 
            $totalPaginas = ceil(count($cantida)/$totalResultados);

            $hasta = $pag * $totalResultados;
            $desde = $hasta - $totalResultados;
                       
            $data = self::$db->select("contents(ct)",
            [
                "[><]categories(c)" => ["ct.id_category"=>"id"]
            ],
            [
                "ct.id",
                "ct.name",
                "ct.description",
                "c.name(category)"                    
            ],
            self::$db::raw("where 
            ( 
                UPPER(ct.name) like UPPER('%".$search."%') OR 
                UPPER(ct.description) like UPPER('%".$search."%') OR 
                UPPER(c.name) like UPPER('%".$search."%')
            )            
                order by ct.name asc 
                limit ".$desde.",".$hasta."
                ")
            );
            

            $paginaAnterior = (($pag) <=1 )?null:$pag-1;
            $paginaSiguiente = (($pag)>=$totalPaginas)?null:$pag+1;
            return [ "data" => $data, "totalPaginas"=>$totalPaginas, "pag"=>$pag, "paginaAnterior"=>$paginaAnterior, "paginaSiguiente"=>$paginaSiguiente];
        }



    }

    $content = new content();   
?>