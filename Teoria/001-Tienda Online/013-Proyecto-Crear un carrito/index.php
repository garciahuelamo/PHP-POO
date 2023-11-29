<?php

    include "Clases/Producto.php";
    include "Clases/Carrito.php";
    include "Clases/Cliente.php";
    include "Clases/Direccion.php";
    include "Inc/funciones.php";

    include "Plantilla/cabecera.php";

    listadoProductos();

    echo '<aside><h4>Carrito</h4>';
    echo '</aside>';

    include "Plantilla/piedepagina.php";
?>