<?php

class Automovil {
    public $color;
    public $marca;
    public $motor;

    public function obtenerColor(){
        return $this->color;
    }
}

class Persona{
    public $nombre;
    public $telefono;

    public function __construct($nom, $tel){
        $this->nombre = $nom;
        $this->telefono = $tel;
    }

    public function obtenerDatos(){
        return "nombre: " . $this->nombre . ", teléfono: " . $this->telefono;
    }
}

class Alumno extends Persona{
    public $grado;
    public $turno;

    public function __construct($nom, $tel, $grad, $turn){
        parent::__construct($nom, $tel);
        $this->grado = $grad;
        $this->turno = $turn;
    }

    public function obtenerDatos(){
        return parent::obtenerDatos() . ", grado: " . $this->grado . ", turno: " . $this->turno;
    }
}

$miauto = new Automovil();
$miauto->color = "rojo";
$miauto->marca = "ford";
$miauto->motor = 2.0;

$miauto2 = new Automovil();
$miauto2->color = "verde";
$miauto2->marca = "mercedes";
$miauto2->motor = 3.0;

$miauto3 = new Automovil();
$miauto3->color = "azul";
$miauto3->marca = "toyota";
$miauto3->motor = 2.0;

echo "<h3>Colores de los autos</h3>";
echo "auto 1: " . $miauto->obtenerColor() . "<br>";
echo "auto 2: " . $miauto2->obtenerColor() . "<br>";
echo "auto 3: " . $miauto3->obtenerColor() . "<br>";

$persona1 = new Persona("José", 123);
$alumno1 = new Alumno("Juan", 433, "tercero", "diurno");

echo "<h3>Datos de personas</h3>";
echo $persona1->obtenerDatos() . "<br>";
echo $alumno1->obtenerDatos() . "<br>";
