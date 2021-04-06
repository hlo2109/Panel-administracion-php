<?php 
    class content extends config {
        function select($categoria){
            $data = self::$db->select("contents(ct)",
            [
                "[><]categories(c)" => ["ct.id_category"=>"id"]
            ],
            [
                "ct.name",
                "ct.slug",
                "ct.content",
                "ct.description",
                "ct.tags",
                "ct.image",
                "c.id(idCategory)",
                "c.name(category)"
            ],
            [ "ct.id_category" => $categoria]);
            if($data){
                return $this->json($data);
            } else{
                return $this->json(["error"=>true,"mensaje"=>"No se encontraron resultados."]);
            }
        } 
        function get($id){
            $data = self::$db->get("contents(ct)",
            [
                "[><]categories(c)" => ["ct.id_category"=>"id"]
            ],
            [
                "ct.name",
                "ct.slug",
                "ct.content",
                "ct.description",
                "ct.tags",
                "ct.image",
                "c.id(idCategory)",
                "c.name(category)"
            ],
            [ "ct.id" => $id]);
            if($data){
                return $this->json($data);
            } else{
                return $this->json(["error"=>true,"mensaje"=>"No se encontraron resultados."]);
            }
        }
    }
    $content = new content();
?>