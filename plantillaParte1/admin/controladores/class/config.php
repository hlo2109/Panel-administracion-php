<?php 
    class config{
        static $db;
        function __construct(){
            global $dba;
            self::$db = $dba;
        }
        
        function pass($data){
            return password_hash($data, PASSWORD_BCRYPT);
        }

        function validator(){
            global $validator;
            return $validator;
        }

        function very_pass($anterior, $data){           
            return (password_verify($data, $anterior))?true:false;
        }

        function message($data, $type=true){ 
            if($type){
                $_SESSION["admin"]["success"] = $data;
            } else{
                $_SESSION["admin"]["error"] = $data;
            }
        }
        function messageSuccess(){
            $error = (isset($_SESSION["admin"]["success"]))? $_SESSION["admin"]["success"]:null;
            unset($_SESSION["admin"]["success"]);
            return $error;
        }
        function messageError(){
            $error = (isset($_SESSION["admin"]["error"]))?$_SESSION["admin"]["error"]:null; 
            unset($_SESSION["admin"]["error"]);
            return $error;
        }

        function validateEmail($email){
            return (1 === preg_match("/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/", $email, $matches));
        }

    }
    $config = new config();
?>