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

        function reset_password($data){
            $user = self::$db->get("users","*",["email"=>$data["email"]]); 
            if($user){
                $pas = rand(5000,10000);
                $newpass = $this->pass($pas);
                if($this->sendEmail($data["email"],"Cambio de contraseña","<b>Esta es tu nueva contraseña:</b> ".$pas)){
                    self::$db->update("users",["password"=>$newpass],["id"=>$user["id"]]);
                    $this->message(["Por favor revisa tu bandeja de entrada."]);
                    return ["state"=>true,"msg"=>"Por favor revisa tu bandeja de entrada."];
                } else{
                    $this->message(["Error al enviar email"], false);        
                    return ["state"=>false,"msg"=>">Error al enviar email"];
                }
                
            } else{
                $this->message(["Email no existe"], false);        
                return ["state"=>false,"msg"=>"Email no existe"];
            }
        }

        function logout(){
            session_destroy();
        }
    }
    $sesion = new sesion();
?>