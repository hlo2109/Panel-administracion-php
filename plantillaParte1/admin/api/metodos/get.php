<?php  
    switch ($_GET['tipo']) {
        case 'content':
            if(isset($_GET["categoria"])){
                echo $content->select($_GET["categoria"]);
            } else if($_GET["id"]){
                echo $content->get($_GET["id"]);
            } else{
                echo $config->json(["error"=>true,"Mensage"=>"No se encontraron resultados."]);
            }
            break;
        
        default:
            # code...
            break;
    }
?>