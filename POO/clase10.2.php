<?php

$nombres = array("Juan", "María", "Luis", "Pedro", "Laura", "José");
$premios = array("10.000.000 Gs", "2.000.000 Gs", "500.000 Gs");

$premiados = array();

foreach($premios as $p){
    $max = 1;
    $ganador = rand(0, (count($nombres)-$max));
    
    array_push($premiados, "Ganador: " . $nombres[$ganador] . ", Premio: $p");
    unset($nombres[$ganador]);
    $nombres = array_values($nombres);
    unset($premios[$max-1]);
    $premios = array_values($premios);
    $max++;
}

echo "<h2>Lista de premiados</h2>";

foreach($premiados as $p){
    echo $p . "<br>";
}
