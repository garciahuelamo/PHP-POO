<?php

    class Direccion{
        private $tipo;
        private $calle;
        private $localidad;
        private $codigopostal;
        private $pais;
        
        public function __construct($tipo, $calle, $localidad, $codigopostal, $pais){
            $this -> tipo = $tipo;
            $this -> calle = $calle;
            $this -> localidad = $localidad;
            $this -> codigopostal = $codigopostal;
            $this -> pais = $pais;
        }
    }
?>