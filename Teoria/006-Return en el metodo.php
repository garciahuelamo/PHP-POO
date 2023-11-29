<?php

    class Producto{
        //Propiedades
        private $precio;

        //Métodos -> funciones dentro de una clase
        public function ponPrecio($nuevoPrecio){
            $this -> precio = $nuevoPrecio;
        }
        public function dimePrecio(){
            return $this -> precio;
        }
    }

    //$producto1 = new Producto();
    $producto1 -> ponPrecio(50);
    echo $producto1 -> dimePrecio();

    /*
    El hecho de que la propiedad sea publica, nos permite acceder desde fuera de la clase; pero, en ocasiones nos puede llevar
    a problemas de seguridad. En cambio, si la propidad la hacemos private -> no podremos acceder a esta misma.
    */
?>