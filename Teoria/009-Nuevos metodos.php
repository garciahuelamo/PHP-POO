<?php

    class Producto{
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
        public function dimePrecio(){
            return $this -> precio;
        }
        public function dimeNombre(){
            return $this -> nombre;
        }
        public function dimeDescripcion(){
            return $this -> descripcion;
        }
            
    }

    $producto1 = new Producto("Zapatillas", "Zapatillas deportivas de color blanco", 50);
    echo $producto1 -> dimePrecio();
    echo "<br>";
    echo $producto1 -> dimeNombre();
    echo "<br>";
    echo $producto1 -> dimeDescripcion();

    /*
    El hecho de que la propiedad sea publica, nos permite acceder desde fuera de la clase; pero, en ocasiones nos puede llevar
    a problemas de seguridad. En cambio, si la propidad la hacemos private -> no podremos acceder a esta misma.

    El constructor es un método especial, que se encarga de definir cosas que ocurren cuando creamos el objeto.
    */
?>