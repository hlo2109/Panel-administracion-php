<?php 
    class config {
        static $db;
        function __construct(){
            global $dba;
            self::$db = $dba;
        }

        function json($data){
            return json_encode($data);
        }
        function sendEmail($to,$subject,$mensaje){
            $OB="----=_OuterBoundary_000";
            $headers ="MIME-Version: 1.0\r\n";
            $headers.="From: hlo21.com <dev@hlo21.com>\n";
            // $headers.="To: ".$destino." <".$destino.">\n";
            // $headers.="X-Priority: 1\n";
            // $headers.="X-MSMail-Priority: High\n";
            $headers.="X-Mailer: My PHP Mailer\n";
            $headers.="Content-Type: text/html;\n\t charset=utf-8\r\n boundary=\"".$OB."\"\n";
            return mail($to, $subject, $mensaje, $headers);
        }
    }
    $config = new config();
?>