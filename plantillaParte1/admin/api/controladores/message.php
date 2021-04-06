<?php 
    class messages extends config{
        function send($data){
            if( !isset($data["name"]) || $data["name"]==''){
                return json_encode(["error"=>true,"mensaje"=>"Campo nombre requerido."]);
            } else if(!isset($data["email"]) || $data["email"]==''){
                return json_encode(["error"=>true,"mensaje"=>"Campo email requerido."]);
            } else if(!isset($data["phone"]) || $data["phone"]==''){
                return json_encode(["error"=>true,"mensaje"=>"Campo teléfono requerido."]);
            } else if(!isset($data["affair"]) || $data["affair"]==''){
                return json_encode(["error"=>true,"mensaje"=>"Campo asunto requerido."]);
            } else if(!isset($data["message"]) || $data["message"]==''){
                return json_encode(["error"=>true,"mensaje"=>"Campo mensaje requerido."]);
            }
            self::$db->insert("messages",[
                "name"=>$data["name"],
                "email"=>$data["email"],
                "phone"=>$data["phone"],
                "affair"=>$data["affair"],
                "message"=>$data["message"],
                "date_create"=>date("Y-m-d H:i:s")
            ]);
            $mensaje = "
                Nombre: $data[name] </br>
                Email: $data[email] </br>
                Teléfono: $data[phone] </br>
                Asunto: $data[affair] </br>
                Mensaje: $data[message] </br>
            ";
    
            if($this->sendEmail("dev@hlo21.com","Nuevo contacto",$mensaje)){
                return json_encode(["success"=>true,"mensaje"=>"Mensaje enviado correctamente."]);
            } else{
                return json_encode(["error"=>true,"mensaje"=>"Error al enviar el mensaje."]);
            }

            
        }
    }
    $mensaje = new messages();
?>