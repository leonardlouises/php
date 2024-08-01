<?php

session_start();

require("models.php");

if(isset($_GET['logout'])){
    session_destroy();
    header('Location: views.php');
    exit;
}

if(!isset($_SESSION['cliente'])){
    $_SESSION['cliente'] = array();
}

if(isset($_POST['nombre']) && isset($_POST['cedula']) && isset($_POST['fechaN']) && isset($_POST['telefono']) && isset($_POST['direccion'])){
    agregarCliente();
}

function agregarCliente(){
    if(isset($_POST['agregar'])){
        $cliente = new Cliente(
            $_POST['nombre'],
            $_POST['cedula'],
            $_POST['fechaN'],
            $_POST['telefono'],
            $_POST['direccion']
        );

        array_push($_SESSION['cliente'], $cliente);
        header('Location: views.php');
        exit;
    }
}