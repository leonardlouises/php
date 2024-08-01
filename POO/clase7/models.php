<?php

abstract class Persona{
    private $nombre;
    private $cedula;
    private $fechaNacimiento;

    public function __construct($nom, $ced, $fecha){
        $this->nombre = $nom;
        $this->cedula = $ced;
        $this->fechaNacimiento = $fecha;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getCedula(){
        return $this->cedula;
    }

    public function getNacimiento(){
        return $this->fechaNacimiento;
    }

    public function setNombre($nuevoN){
        $this->nombre = $nuevoN;
    }

    public function setCedula($nuevaC){
        $this->cedula = $nuevaC;
    }

    public function setNacimiento($nuevaF){
        $this->fechaNacimiento = $nuevaF;
    }

    public abstract function getValor();
}

class Cliente extends Persona{
    private $telefono;
    private $direccion;

    public function __construct($nom, $ced, $fecha, $tel, $dir){
        parent::__construct($nom, $ced, $fecha);
        $this->telefono = $tel;
        $this->direccion = $dir;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setTelefono($nuevoT){
        $this->telefono = $nuevoT;
    }

    public function setDireccion($nuevaD){
        $this->direccion = $nuevaD;
    }

    public function getValor(){
        return "Nombre: " . parent::getNombre() . " || Teléfono: " . $this->telefono . " || Dirección: " . $this->direccion;
    }
}