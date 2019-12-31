<?php 
    class sesion extends config
    {
        function __construct(){

        }
        function login($data){ 
            $user = self::$db->get("users","*",["email"=>$data["email"]]); 
            if($user){
                if($this->very_pass($user["password"], $data["password"])){ 
                    $_SESSION["admin"]["id"] = $user["id"];
                    $_SESSION["admin"]["name"] = $user["name"];
                    $_SESSION["admin"]["email"] = $user["email"];
                    $_SESSION["admin"]["profile"] = $user["id_profile"];
                    $this->message(["Inicio sesión"]);
                    return ["state"=>true,"msg"=>"Inicio sesión"];
                } else{
                    $this->message(["Error contraseña"], false);
                    return ["state"=>false,"msg"=>"Error contraseña"];
                }
            } else{
                $this->message(["Email no existe"], false);        
                return ["state"=>false,"msg"=>"Email no existe"];
            }
        }
        function sesion_verify(){
            $_SESSION["admin"]["id"] = isset($_SESSION["admin"]["id"])?$_SESSION["admin"]["id"]:null;
            return ($_SESSION["admin"]["id"])?true:false;
        }
        function logout(){
            session_destroy();
        }
    }
    $sesion = new sesion();
?>