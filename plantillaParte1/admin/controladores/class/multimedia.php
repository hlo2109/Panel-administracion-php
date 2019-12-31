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
                $nameImage = $this->loadFile($tmp_name, $name, $size);                               
            } 
            $this->message(["Archivos subidos correctamente."]);
            return ["state"=>true];
        }

        function file(){
            $tmp_name = $_FILES["file"]["tmp_name"];
            $name = $_FILES["file"]["name"];
            $size = $_FILES["file"]["size"];
            $nameImage = $this->loadFile($tmp_name, $name, $size);
            return ["state"=>true, "link"=>$nameImage];

        }

        function loadFile($tmp_name, $name, $size){
            $directorio = __DIR__.'../../../../images/';
            if(!file_exists($directorio)){
                mkdir($directorio, 0777) or die("problemas al crear directorio");
            }

            $rutaInit = $tmp_name;
            $fileName = $name;
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $bytes = $size;

            $size = number_format( $bytes/1048576 , 5);
            $nameImage = rand().base64_encode(round(0,1000)).".".$ext;
            $rutaSend = $directorio.$nameImage;
            move_uploaded_file($rutaInit, $rutaSend);
            self::$db->insert("multimedia",[
                "image"=>$nameImage,
                "ext"=>$ext,
                "size"=>$size,
                "date_create"=>date("Y-m-d H:i:s")
            ]); 
            return $nameImage; 
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

        function deleteImage($data){
            $directorio = __DIR__.'../../../../images/';
            $file = self::$db->get("multimedia","*",["image"=>$data]);
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