<?php 
    class message extends config {
        function __construct(){

        }
        function delete($id){
            self::$db->delete("messages",["id"=>$id]);
            $error = self::$db->error(); 
            if($error[1]){ 
                $this->message([$error[2]],false); 
                return ["state"=>false];
            } else{
                $this->message(["Mensaje eliminado correctamente."]);
                return ["state"=>true];
            }  
        }
        function list(){
            $totalResultados = 2;
            $pag = isset($_GET["pag"])?$_GET["pag"]:1;
            $search = isset($_GET["search"])?$_GET["search"]:null; 
            
            $cantida =  self::$db->select("messages","*",
                self::$db::raw("where 
                ( 
                    UPPER(name) like UPPER('%".$search."%') OR 
                    UPPER(email) like UPPER('%".$search."%') OR 
                    UPPER(phone) like UPPER('%".$search."%') OR 
                    UPPER(affair) like UPPER('%".$search."%') OR
                    UPPER(message) like UPPER('%".$search."%')
                )             
                order by name asc  
                ")
            );  
            $totalPaginas = round(count($cantida)/$totalResultados);

            $hasta = $pag * $totalResultados;
            $desde = $hasta - $totalResultados;
                       
            $data = self::$db->select("messages","*",
                self::$db::raw("where 
                ( 
                    UPPER(name) like UPPER('%".$search."%') OR 
                    UPPER(email) like UPPER('%".$search."%') OR 
                    UPPER(phone) like UPPER('%".$search."%') OR 
                    UPPER(affair) like UPPER('%".$search."%') OR
                    UPPER(message) like UPPER('%".$search."%')
                )              
                order by name asc 
                limit ".$desde.",".$hasta."
                ")
            );
            

            $paginaAnterior = (($pag) <=1 )?null:$pag-1;
            $paginaSiguiente = (($pag)>=$totalPaginas)?null:$pag+1;
            return [ "data" => $data, "totalPaginas"=>$totalPaginas, "pag"=>$pag, "paginaAnterior"=>$paginaAnterior, "paginaSiguiente"=>$paginaSiguiente];
        }

    }

    $message = new message();

?>