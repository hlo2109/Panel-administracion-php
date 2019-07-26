<?php  
    session_start();
    require "librerias/Medoo.php";
    use Medoo\Medoo; 
    require('librerias/vendor/autoload.php');
    use Rakit\Validation\Validator;
    $validator = new Validator;
    $validator->setTranslations([
        'and' => 'es',
        'or' => 'atau'
    ]);
    
    $dba = new Medoo([                
        'database_type' => 'mysql',
        'database_name' => 'admintutorial',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);
    require "class/config.php";
    require "class/sesion.php";
    require "class/profiles.php";
    require "class/users.php";
?>