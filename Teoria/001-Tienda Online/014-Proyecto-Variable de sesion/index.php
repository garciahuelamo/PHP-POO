<?php

    include "Clases/Producto.php";
    include "Clases/Carrito.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";
    include "Inc/funciones.php";

    if(!isset($_SESSION['carrito'])){
        $_SESSION['carrito'] = new Carrito();
    }

    if(isset($_GET['p'])){
        $json = json_decode(base64_decode($_GET['p']));
        $_SESSION['carrito'].anadirProducto(
            new ProductoFisico(
                $json -> nombre,
                $json -> descripcion,
                $json -> precio,
                $json -> longitud,
                $json -> anchura,
                $json -> altura,
                $json -> peso
                )
        );
    }

    include "Plantilla/cabecera.php";

    listadoProductos();

    echo '<aside><h4>Carrito</h4>';
        var_dump($_SESSION['carrito'] -> listarProductos());
    echo '</aside>';

    include "Plantilla/piedepagina.php";
?>