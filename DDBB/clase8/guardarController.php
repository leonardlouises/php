<?php

if(isset($_POST['cedula']) && isset($_POST['nombreA'])){
    include("conexion.php");

    $cedula = $_POST['cedula'];
    $nombreA = $_POST['nombreA'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO CLIENTE VALUES('$cedula', '$nombreA', '$telefono');";
    $conexion->query($sql);
    $conexion->close();

    header("Location: index.php");
    exit;
}

if(isset($_GET)){
    include("conexion.php");
    $ci = $_GET['ced'];
    $sentencia = "DELETE FROM CLIENTE WHERE CEDULA = $ci";
    $conexion->query($sentencia);
    $conexion->close();
    header("Location: index.php");
    exit;
}