<?php 
    class profiles extends config{
        function __construct(){

        }

        function select(){
            $data = self::$db->select("profiles","*",
                [                    
                    "ORDER"=>["name"=>"ASC"]
                ]
            );
            return $data;
        }

    }
    $profiles = new profiles;
?>