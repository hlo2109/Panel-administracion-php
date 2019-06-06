<?php 
   try {
       $a=1;
       if($a!=0){
            throw new Exception("El número es diferente a 0");            
       }
   } catch (Exception $e) {
       echo $e->getMessage();
   }
?>