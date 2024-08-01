<?php

class Animal{
    private string $alimento;

    function __construct($a){
        $this->alimento = $a;
    }

    function to_string(){
        return "Tipo de alimentación : $this->alimento";
    }
}

class Perro extends Animal{
    private string $nombre;
    private int $edad;

    function __construct($a, $n, $e){
        parent::__construct($a);
        $this->nombre = $n;
        $this->edad = $e;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getEdad(){
        return $this->edad;
    }

    function setNombre($nuevo){
        $this->nombre = $nuevo;
    }

    function setEdad($nueva){
        $this->edad = $nueva;
    }

    function edadEnP(){
        return $this->edad + 7;
    }

    function to_string(){
        return parent::to_string() . ", Nombre: $this->nombre, Edad: $this->edad, ";
    }
}

$perro1 = new Perro("carne", "balto", 6);

echo $perro1->to_string();