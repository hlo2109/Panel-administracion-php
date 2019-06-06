<?php 
    $array_multi = [
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
    
    foreach ($array_multi as $key => $value) {
        echo $key."--".$value["nombre"]." - ".$value["edad"]." - ".$value["comentario"];
        echo "<br>";
    }

?>