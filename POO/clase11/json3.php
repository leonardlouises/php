<?php

header("Content-Type:application/json");

$peso = $_GET['peso'];

$estatura = $_GET['estatura'];

if(!empty($peso) && !empty($estatura)){
    $estatura = $estatura / 100;

    $imc = $peso / $estatura ** 2;

    $imc = round($imc, 2);

    respuesta(200, "Ok", $imc);
}
else{
    respuesta(400, "Datos no validos", null);
}

function respuesta($estado, $mensaje, $datos){

    header("HTTP/1.1 $estado $mensaje");

    $respuesta['estado'] = $estado;
    $respuesta['mensaje'] = $mensaje;
    $respuesta['datos'] = $datos;

    $res_json = json_encode($respuesta);

    echo $res_json;
}