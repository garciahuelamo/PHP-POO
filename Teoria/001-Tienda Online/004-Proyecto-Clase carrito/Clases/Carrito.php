<?php

    class Carrito{
        private $productos;
        private $cliente;

        public function __construct(){
            $this -> productos = [];
            $this -> cliente;
        }
        
        public function anadirProducto($producto){
            array_push($this -> productos, $producto);
        }
    }

?>