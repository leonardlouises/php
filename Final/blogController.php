<?php

session_start();

if(isset($_POST['mensaje'])){
    include('conexion.php');

    $user = $_SESSION['nombre'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO blog VALUES('default','$user', '$mensaje');";
    $conexion->query($sql);
    $conexion->close();

    header('Location: blog.php');
    exit;
}