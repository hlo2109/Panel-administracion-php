<?php 

    class categories extends config{
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

            self::$db->insert("categories",[
                "name"=>$data["name"],
                "slug"=>$data["slug"],
                "father"=>$data["father"],
                "description"=>$data["description"],
                "date_create"=>date("Y-m-d H:i:s")
            ]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Categoria creada correctamente."]);
                return ["state"=>true];
            }  

        }
        function select($id){
            return self::$db->get("categories","*",['id'=>$id]);
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

            self::$db->update("categories",[
                "name"=>$data["name"],
                "slug"=>$data["slug"],
                "father"=>$data["father"],
                "description"=>$data["description"],
                "date_update"=>date("Y-m-d H:i:s")
            ],["id"=>$id]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Categoria editada correctamente."]);
                return ["state"=>true];
            }  
        }
        function delete($data){
            self::$db->delete("categories",["father"=>$data["id"]]);
            self::$db->delete("categories",["id"=>$data["id"]]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Categoria eliminada correctamente."]);
                return ["state"=>true];
            }  
        }
        function list(){
            $totalResultados = 10;
            $pag = isset($_GET["pag"])?$_GET["pag"]:1;
            $search = isset($_GET["search"])?$_GET["search"]:null; 
            
            $cantida =  self::$db->select("categories","*",
                self::$db::raw("where 
                ( 
                    UPPER(name) like UPPER('%".$search."%')
                )             
                order by name asc  
                ")
            );  
            $totalPaginas = round(count($cantida)/$totalResultados);

            $hasta = $pag * $totalResultados;
            $desde = $hasta - $totalResultados;
                       
            $data = self::$db->select("categories","*",
                self::$db::raw("where 
                ( 
                    UPPER(name) like UPPER('%".$search."%')
                )              
                order by name asc 
                limit ".$desde.",".$hasta."
                ")
            );
            

            $paginaAnterior = (($pag) <=1 )?null:$pag-1;
            $paginaSiguiente = (($pag)>=$totalPaginas)?null:$pag+1;
            return [ "data" => $data, "totalPaginas"=>$totalPaginas, "pag"=>$pag, "paginaAnterior"=>$paginaAnterior, "paginaSiguiente"=>$paginaSiguiente];
        }

        function listFathers($id = null){
            $result = self::$db->select("categories", "*", ['father'=>0, 'id[!]'=>$id]);            
            return $result;
        }

        function todo(){        
            $result = self::$db->select("categories", "*", ['ORDER'=>["name"=>"ASC"]]); 
            return $result;
        }
        
    }

    $categories = new categories();

?>