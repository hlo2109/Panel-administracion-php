<?php 
    $url_site = "http://php.test/git/plantillaPHP/plantillaParte1/";

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
?>