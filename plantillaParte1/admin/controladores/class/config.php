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
        function very_pass($anterior, $data){           
            return (password_verify($data, $anterior))?true:false;
        }        
    }
    $config = new config();
?>