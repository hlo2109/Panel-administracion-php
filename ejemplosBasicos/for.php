<?php 
    // declaración
    /*
    for ($i=1; $i <= 100; $i++) { 
        echo $i;
        echo "<br>";
    }*/

    // $vector = [10,9,8,7,6,5,4,3,2,1,0,-1];
    // for ($i=0; $i < count($vector) ; $i++) { 
    //     echo $vector[$i];
    //     echo "<br>";
    // }
    $vectorMulti = [
        [
            "nombre" => "Ejemplo 1",
            "edad" => 20,
            "comentario" => "Hola mundo"
        ],
        [
            "nombre" => "Ejemplo 2",
            "edad" => 20,
            "comentario" => "Hola mundo"
        ],
        [
            "nombre" => "Ejemplo 3",
            "edad" => 20,
            "comentario" => "Hola mundo"
        ]
    ];
    for ($i=0; $i < count($vectorMulti); $i++) { 
        echo $vectorMulti[$i]["nombre"]." - ".$vectorMulti[$i]["edad"]." - ".$vectorMulti[$i]["comentario"];
        echo "<br>";
    }
?>