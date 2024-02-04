<?php

    include "Classes/client.php";
    include "Classes/product.php";
    include "Classes/shopping_cart.php";

    session_start();

    include "Inc/functions.php";

    shoppingCart();
    addProductsCart();

    include "Templates/header.php";
    
    if(!isset($_GET['page'])){
        listProducts();
    } else {
        if($_GET['page'] == 'dataclient'){
            formClient();
        } else if($_GET['page'] == 'processorder'){
            sendOrder();
        }
    }
    
    showCart();

    include "Templates/footer.php";
?>