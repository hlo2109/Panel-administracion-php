<?php 
    // Declaración
    /*$a = 0;
    while ($a <= 11) {
        echo $a;
        $a++;
    }*/

    /*$vector = [10,9,8,7,6,5,4,3,2,1,0,-1];
    $a = 0;
    while ($a <= count($vector)) {
        if($a>11){ break; } 
        else{
            echo $vector[$a];
            echo "<br>";
            $a++;
        }
    }*/
    $vectorMulti = [
        [
            "nombre" => "Ejemplo 1",
            "edad" => 21,
            "comentario" => "Hola mundo"
        ],
        [
            "nombre" => "Ejemplo 2",
            "edad" => 22,
            "comentario" => "Hola mundo"
        ],
        [
            "nombre" => "Ejemplo 3",
            "edad" => 23,
            "comentario" => "Hola mundo"
        ]
    ];
    $a = 0;
    while ($a < count($vectorMulti)) {
        if($vectorMulti[$a]["edad"]!=22){
            echo $vectorMulti[$a]["nombre"]." - ".$vectorMulti[$a]["edad"]." - ".$vectorMulti[$a]["comentario"];
            echo "<br>";
        }
        $a++;
    }

?>