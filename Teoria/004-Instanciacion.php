<?php

    class Producto{
        //Propiedades
        public $precio;

        //Métodos -> funciones dentro de una clase
        public function dimePrecio(){
            echo $this -> precio;
        }
    }

    //$producto1 = new Producto();
    $producto1 -> precio = 40;
    echo "Obtengo el precio de forma directa:<br>";
    echo $producto1 -> precio;
    echo "<br>Obtengo el precio mediante un método:<br>";
    echo $producto1 -> dimePrecio();
?>