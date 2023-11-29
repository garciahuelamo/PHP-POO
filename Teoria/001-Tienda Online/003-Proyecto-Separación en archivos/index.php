<?php

    include "Clases/Producto.php";
    include "Clases/Carrito.php";

    array_push($productos, new ProductoFisico("Zapatillas", "Zapatillas deportivas de color azul", 50, 10, 10, 10, 5));
    var_dump(($productos));

    $carrito = new Carrito();
    
    $carrito -> anadirProducto(new ProductoFisico("Zapatillas", "Zapatillas deportivas de color blanco", 50, 10, 10, 5));
    $carrito -> anadirProducto(new ProductoFisico("Zapatillas", "Zapatillas deportivas de color azul", 50, 10, 10, 5));

    echo $carrito -> productos;

    /*
    Un array no va a ser simplemente una colección de objetos, sino que probablemente en el array necesitaremos
    métodos.
    Además, en el carrito, no solo tendré un array de productos sino que también tendremos clientes.
    */
?>