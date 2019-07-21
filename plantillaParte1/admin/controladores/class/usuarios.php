<?php 
    class usuarios extends config{
        function __construct(){
             $this->create();
        }
        
        function create(){
            self::$db->insert("users",[
                "name"=>"Hlo",
                "email"=>"dev@hhlo21.com",
                "password"=>$this->pass("123456"),
                "id_profile"=>1,
                "date_create"=>date("Y-m-d H:i:s")
            ]);
            // $error = self::$db->error();
            // if($error[1]){
            //     echo $error[2];
            // } else{
            //     echo "Success";
            // }
        }

        function  update(){

        }
        function delete(){

        }
        function list(){

        }
    }

    $usuarios = new usuarios();

?>