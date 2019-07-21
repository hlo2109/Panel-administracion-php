<?php  
    session_start();
    require "librerias/Medoo.php";
    use Medoo\Medoo;
    $dba = new Medoo([                
        'database_type' => 'mysql',
        'database_name' => 'admintutorial',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);
    require "class/config.php";
    require "class/sesion.php";
    require "class/usuarios.php";
?>