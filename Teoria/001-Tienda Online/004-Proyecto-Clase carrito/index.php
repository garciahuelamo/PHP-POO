<?php

    include "Clases/Producto.php";

    $productos = [];

    array_push($productos, new ProductoFisico("Zapatillas", "Zapatillas deportivas de color blanco", 50, 10, 10, 10, 5));
    array_push($productos, new ProductoFisico("Zapatillas", "Zapatillas deportivas de color azul", 50, 10, 10, 10, 5));
    var_dump(($productos));

?>