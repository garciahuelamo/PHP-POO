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
        public function dameDatos(){
            return [$this -> nombre, $this -> descripcion, $this -> precio];
        }
    }

    //Herencia:  
    class ProductoFisico extends Producto{
        private $anchura;
        private $altura;
        private $profundidad;
        private $peso;
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

    class ProductoVirtual extends Producto{
        private $url;
        private $pesoKB;
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

    //$producto1 = new ProductoFisico("Zapatillas", "Zapatillas deportivas de color blanco", 50);
    echo var_dump($producto1 -> dameDatos());
    //$producto2 = new ProductoVirtual("Manual de usuario", "Manual en PDF", 20);
    echo var_dump($producto2);

    /*
    El hecho de que la propiedad sea publica, nos permite acceder desde fuera de la clase; pero, en ocasiones nos puede llevar
    a problemas de seguridad. En cambio, si la propidad la hacemos private -> no podremos acceder a esta misma.

    El constructor es un método especial, que se encarga de definir cosas que ocurren cuando creamos el objeto.

    Herencia -> existe la clase madre, donde descienden las clases hijas (entre hijas tienen diferentes propiedades), que
    acogen las propiedades y métodos de la clase madre.
    */
?>