<?php 
    switch ($_GET['tipo']) {
        case 'contacto':
                echo $mensaje->send($_POST);
            break;
        
        default:
            # code...
            break;
    }
?>