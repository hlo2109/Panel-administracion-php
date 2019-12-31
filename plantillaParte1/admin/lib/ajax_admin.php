<?php 
    require __DIR__."/../controladores/union.php";
    if(isset($_FILES["file"]) && $_FILES["file"]["name"]){
        $response = $multimedia->file();
        echo json_encode(["link"=>$url_site.'/images/'.$response["link"]]);
    }
    $_GET["cod"] = isset($_GET["cod"])?$_GET["cod"]:'';
    switch ($_GET["cod"]) {
        case 'loadImages':
            $data = [];
            foreach ($multimedia->list() as $key => $item) {
                $data[] = [
                    "url"=>$url_site.'/images/'.$item["image"],
                    "thumb"=>$url_site.'/images/'.$item["image"],
                    "id"=>$item["id"]
                ];
            }

            echo json_encode($data);
            break;
            case 'deleteImage':
                $image = explode("/", $_GET["src"]);
                $data = $multimedia->deleteImage(end($image));
                echo json_encode($data);
                break;
        default:
            # code...
            break;
    }

?>