<?php

    include "Classes/client.php";
    include "Classes/product.php";
    include "Classes/shopping_cart.php";
    include "Inc/functions.php";

    if(!isset($_SESSION['carrito'])){
        $_SESSION['cart'] = new shoppingCart();
    }

    include "Templates/header.php";

    listProducts();

    echo '<aside><h4>Cart</h4>';
        var_dump($_SESSION['cart'] -> listProducts());
    echo '</aside>';

    include "Templates/footer.php";

?>