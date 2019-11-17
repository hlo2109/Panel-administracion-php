<?php 
    class multimedia extends config {
        function __construct(){

        }

        function create($data){
            $directorio = __DIR__.'../../../../images/';
            if(!file_exists($directorio)){
                mkdir($directorio, 0777) or die("problemas al crear directorio");
            }

            $files = count($_FILES["files"]["name"]);
            for ($i=0; $i < $files; $i++) { 
                $tmp_name = $_FILES["files"]["tmp_name"][$i];
                $name = $_FILES["files"]["name"][$i];
                $ext = pathinfo($name, PATHINFO_EXTENSION);
                $size = $_FILES["files"]["size"][$i]; //KB
                $size = number_format($size / 1048576, 5); //MB
                $nameImage = rand().base64_encode(round(0,1000)).".".$ext;
                $rutaSend = $directorio.$nameImage;
                move_uploaded_file($tmp_name, $rutaSend);

                self::$db->insert("multimedia",[
                    "image"=>$nameImage,
                    "ext"=>$ext,
                    "size"=>$size,
                    "date_create"=>date("Y-m-d H:i:s")
                ]);                
            } 
            $this->message(["Archivos subidos correctamente."]);
            return ["state"=>true];
        }

        function list(){
            return self::$db->select("multimedia","*");
        }
        function delete($data){
            $directorio = __DIR__.'../../../../images/';
            $file = self::$db->get("multimedia","*",["id"=>$data["id"]]);
            if($file){
                if(file_exists($directorio.$file["image"])){
                    unlink($directorio.$file["image"]);
                }

                self::$db->delete("multimedia",["id"=>$file["id"]]);

                $error = self::$db->error(); 
                if($error[1]){
                    $this->message([$error[2]],false); 
                    return ["state"=>false];
                } else{
                    $this->message(["Archivos creado correctamente."]);
                    return ["state"=>true];
                }  
            } else{
                $this->message(["El archivo no se pudo eliminar"],false); 
                return ["state"=>false];
            }
        }
    }

    $multimedia = new multimedia();

?>