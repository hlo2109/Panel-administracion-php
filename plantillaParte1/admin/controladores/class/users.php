<?php 
    class users extends config{
        function __construct(){ 

        }
        
        function create($data){
            $name = isset($data["name"])?$data["name"]:null;
            $email = isset($data["email"])?$data["email"]:null;
            $password = isset($data["password"])?$data["password"]:null;
            $profile = isset($data["profile"])?$data["profile"]:null;
            $validation  = $this->validator()->make($data,[
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                'profile' => 'required|numeric'
            ]);
            $validation->validate();
            if ($validation->fails()) {
                $error = $validation->errors()->all();
                $this->message($error,false); 
                return ["state"=>false];
            }  

            self::$db->insert("users",[
                "name"=>$data["name"],
                "email"=>$data["email"],
                "password"=>$this->pass($data["password"]),
                "id_profile"=>$data["profile"],
                "date_create"=>date("Y-m-d H:i:s")
            ]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Usuario creado correctamente."]);
                return ["state"=>true];
            }            
        }
        function user($id){
            return self::$db->get("users",'*',['id'=>$id]);
        }

        function  update($data, $id){

            $send = [
                "name"=>$data["name"],
                "email"=>$data["email"],
                "id_profile"=>$data["profile"],
                "date_update"=>date("Y-m-d H:i:s")
            ];
            if($data["password"]){
                $send += [
                    "password"=>$this->pass($data["password"])
                ];
            }
            self::$db->update("users",$send,["id"=>$id]);

            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Usuario editado correctamente."]);
                return ["state"=>true];
            }  
        }
        function delete($id){
            self::$db->delete("users",["id"=>$id]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Usuario eliminado correctamente."]);
                return ["state"=>true];
            }  
        }
        function list(){
            $totalResultados = 2;
            $pag = isset($_GET["pag"])?$_GET["pag"]:1;
            $search = isset($_GET["search"])?$_GET["search"]:null; 
            
            $cantida =  self::$db->select("users(u)",
                [
                    "[><]profiles(p)" => ["u.id_profile"=>"id"]
                ],
                [
                    "u.id",
                    "u.name",
                    "u.email",
                    "p.name(profile)"                    
                ],
                self::$db::raw("where 
                ( 
                    UPPER(u.name) like UPPER('%".$search."%') OR 
                    UPPER(p.name) like UPPER('%".$search."%') OR 
                    UPPER(u.email) like UPPER('%".$search."%')
                )             
                order by u.name asc  
                ")
            );

            $totalPaginas = round(count($cantida)/$totalResultados);

            $hasta = $pag * $totalResultados;
            $desde = $hasta - $totalResultados;
                       
            $data = self::$db->select("users(u)",
                [
                    "[><]profiles(p)" => ["u.id_profile"=>"id"]
                ],
                [
                    "u.id",
                    "u.name",
                    "u.email",
                    "p.name(profile)"                    
                ],
                self::$db::raw("where 
                ( 
                    UPPER(u.name) like UPPER('%".$search."%') OR 
                    UPPER(p.name) like UPPER('%".$search."%') OR 
                    UPPER(u.email) like UPPER('%".$search."%')
                )             
                order by u.name asc 
                limit ".$desde.",".$hasta."
                ")
            );
            

            $paginaAnterior = (($pag) <=1 )?null:$pag-1;
            $paginaSiguiente = (($pag)>=$totalPaginas)?null:$pag+1;
            return [ "data" => $data, "totalPaginas"=>$totalPaginas, "pag"=>$pag, "paginaAnterior"=>$paginaAnterior, "paginaSiguiente"=>$paginaSiguiente];
        }
    }

    $users = new users();

?>
