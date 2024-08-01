<?php

class Persona{
    private string $nobre;
    private int $edad;
    private string $ciudad;

    public function __construct($n, $e, $c){
        $this->nombre = $n;
        $this->edad = $e;
        $this->ciudad = $c;
    }
}

$persona1 = new persona("Juan",  20, "Asunción");

$json = json_encode($persona1);

echo $json;