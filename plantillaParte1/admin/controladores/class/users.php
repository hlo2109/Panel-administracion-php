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

        function  update(){

        }
        function delete(){

        }
        function list(){

        }
    }

    $users = new users();

?>
