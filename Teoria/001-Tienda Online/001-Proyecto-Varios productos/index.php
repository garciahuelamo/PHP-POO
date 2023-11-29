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

    $producto1 = new ProductoFisico("Zapatillas", "Zapatillas deportivas de color blanco", 50, 10, 10, 10, 5);
    $producto2 = new ProductoFisico("Zapatillas", "Zapatillas deportivas de color azul", 50, 10, 10, 10, 5);

    /*
    El hecho de que la propiedad sea publica, nos permite acceder desde fuera de la clase; pero, en ocasiones nos puede llevar
    a problemas de seguridad. En cambio, si la propidad la hacemos private -> no podremos acceder a esta misma.

    El constructor es un método especial, que se encarga de definir cosas que ocurren cuando creamos el objeto.

    Herencia -> existe la clase madre, donde descienden las clases hijas (entre hijas tienen diferentes propiedades), que
    acogen las propiedades y métodos de la clase madre.

    Clase abstracta -> no se puede crear objetos a partir de una clase abstracta. Sino que, lo único que se puede hacer es extender
    en otras clases hijas. La clase abstracta existe simplemente como plantilla para que otras clases la puedan heredar.

    Concepto de interfaz - cuando creamos una interfaz especificamos una plantilla donde todo el resto de clases deben implementar
    dicha plantilla.
    */
?>