<?php

    interface DarDatos{
        public function dameDatos();
    }

    abstract class Producto{
        //Propiedades
        private $precio;
        private $nombre;
        private $descripcion;

        //Métodos -> funciones dentro de una clase
        public function __construct($nombre, $descripcion, $precio){ //Método constructor -> abajo la explicación
            $this -> nombre = $nombre;
            $this -> descripcion = $descripcion;
            $this -> precio = $precio;
        }
        public function ponPrecio($nuevoPrecio){
            $this -> precio = $nuevoPrecio;
        }
        public function ponNombre($nuevoNombre){
            $this -> precio = $nuevoNombre;
        }
        public function ponDescripcion($nuevaDescripcion){
            $this -> precio = $nuevaDescripcion;
        }
        public function dimePrecio(){
            return $this -> precio;
        }
        public function dimeNombre(){
            return $this -> nombre;
        }
        public function dimeDescripcion(){
            return $this -> descripcion;
        }
        public function dameDatos(){
            return [$this -> nombre, $this -> descripcion, $this -> precio];
        }
    }

    //Herencia:  
    class ProductoFisico extends Producto implements DarDatos{
        private $anchura;
        private $altura;
        private $profundidad;
        private $peso;
        //Método constructor
        public function __construct($nombre, $descripcion, $precio, $anchura, $altura, $profundidad, $peso){ //Método constructor -> abajo la explicación
            $this -> ponPrecio($precio);
            $this -> ponNombre($nombre);
            $this -> ponDescripcion($descripcion);
            $this -> anchura = $anchura;
            $this -> altura = $altura;
            $this -> profundidad = $profundidad;
            $this -> peso = $peso;
        }
        public function dameDatos(){
            return [
            $this -> dimeNombre(),
            $this -> dimeDescripcion(),
            $this -> dimePrecio(),
            $this -> anchura,
            $this -> altura,
            $this -> profundidad,
            $this -> peso
            ];
        }
    }

    class ProductoVirtual extends Producto implements DarDatos{
        private $url;
        private $pesoKB;
        //Método constructor
        public function __construct($nombre, $descripcion, $precio, $url, $pesoKB){ //Método constructor -> abajo la explicación
            $this -> ponPrecio($precio);
            $this -> ponNombre($nombre);
            $this -> ponDescripcion($descripcion);
            $this -> url = $url;
            $this -> pesoKB = $pesoKB;
        }
        public function dameDatos(){
            return [
            $this -> dimeNombre(),
            $this -> dimeDescripcion(),
            $this -> dimePrecio(),
            $this -> url,
            $this -> pesoKB
            ];
        }
    }
?>    