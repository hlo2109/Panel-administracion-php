<?php 
    header('Access-Controll-Allow-Origin: *'); 
    header('Access-Controll-Allow-Methods: GET, POST, PUT, DELETE');
    require "union.php"; 
    
    $metodo = $_SERVER["REQUEST_METHOD"]; 
    $_GET['tipo'] = isset($_GET['tipo'])?$_GET['tipo']:'';
    switch ($metodo) {
        case 'GET':
            $_GET['tipo'] = isset($_GET['tipo'])?$_GET['tipo']:'';
            include "metodos/get.php";
            break;
        case 'POST':
            include "metodos/post.php";
            break;
        case 'PUT':
            # code...
            break;
        case 'DELETE':
            # code...
            break;
        default:
            # code...
            break;
    } 
?>