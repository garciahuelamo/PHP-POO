<?php

    include "Clases/Producto.php";
    include "Clases/Carrito.php";
    include "Clases/Cliente.php";

    $carrito = new Carrito();

    $carrito -> anadirCliente("Jose Vicente", "Carratala", "info@info.com", "12345");

    $carrito -> anadirProducto(new ProductoFisico("Zapatillas", "Zapatillas deportivas de color blanco", 50, 10, 10, 10, 5));
    $carrito -> anadirProducto(new ProductoFisico("Zapatillas 2", "Zapatillas deportivas de color azul", 50, 10, 10, 10, 5));

    echo $carrito -> sumarTotal();
?>