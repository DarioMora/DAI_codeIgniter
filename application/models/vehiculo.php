<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vehiculo
{
    private $vin;
    private $patente;
    private $marca;
    private $moldeo;
    private $color;
    private $anio;  
    
    
    function __construct() {
        
    }

    function getVin() {
        return $this->vin;
    }

    function getPatente() {
        return $this->patente;
    }

    function getMarca() {
        return $this->marca;
    }

    function getMoldeo() {
        return $this->moldeo;
    }

    function getColor() {
        return $this->color;
    }

    function getAnio() {
        return $this->anio;
    }

    function setVin($vin) {
        $this->vin = $vin;
    }

    function setPatente($patente) {
        $this->patente = $patente;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setMoldeo($moldeo) {
        $this->moldeo = $moldeo;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setAnio($anio) {
        $this->anio = $anio;
    }


}

