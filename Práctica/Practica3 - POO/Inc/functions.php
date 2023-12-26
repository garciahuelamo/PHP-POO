<?php

    function listProducts(){
        $products = file_get_contents("DataBase/videogames.json");
        $json = json_decode($products);

        foreach ($json as $videogame){
            echo "<article>
                <h3>".$videogame -> name."</h3>
                <p>".$videogame -> image."</p>
                <p>".$videogame -> description."</p>
                <p>".$videogame -> price." euros </p>
                <a href='?p=".base64_encode(json_encode($videogame))."'><button style='background-color: lightgreen'>Add to cart</button></a>
            </article>";
        }
    }

    function shoppingCart(){
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = new shoppingCart();
        }
    }

    function addProductsCart(){
        if(isset($_GET['p'])){
            $json = json_decode(base64_decode($_GET['p']));
            
            $_SESSION['cart']->addProduct(
                new PhysicalVideogame(
                    $json -> name,
                    $json -> style,
                    $json -> min_year,
                    $json -> price,
                    $json -> description,
                    $json -> shop,
                    $json -> status
                )
            );
        }
    }

    function showCart(){
        
        echo '<aside><h4 style="font-size: 18px;">Cart</h4>';
        echo "<table>"; 
 
        foreach($_SESSION['cart'] -> listProducts() as $products){
            echo '
            <tr>
                <td>
                    <h5>'.$products->showName().'</h5>
                    <p>'.$products->showDescription().'</p>
                </td>
                <td>
                    <p>'.$products->showPrice().' euros</p>
                </td>
            </tr>';
        }
    
        echo '<tr><td>Total</td><td>'.$_SESSION['cart'] -> total().' euros </td></tr>';
        echo "</table>";
        echo "<a href='?page=dataclient'><button>Process order</button></a>";
        echo '</aside>';
    }

    function formClient(){
        echo '<h3>The purchase is: '.$_SESSION['cart'] -> total().'</h3>';
        echo '<h4>Data-Client</h4>
            <form method="POST" action="?page=processorder">
                <p>Enter the name</p>
                <input type="text" name="name">
                <p>Enter the surname</p>
                <input type="text" name="surname">
                <p>Enter the email</p>
                <input type="text" name="email">
                <p>Enter the telephone</p>
                <input type="text" name="telephone">
                <input type="submit" value="Send order">
            </form>';   
    }

    function sendOrder(){
        echo "<h4>Your order was processed correctly</h4>";
            $_SESSION['cart'] -> addClient(new client(
                $_POST['name'],
                $_POST['surname'],
                $_POST['address'] = "",
                $_POST['email'],
                $_POST['telephone']
        ));

        $chain = json_encode($_SESSION['cart']);
        file_put_contents("Orders/".date('U').".json", $chain);
        session_destroy();
        echo "<p>Redirecting in 5 seconds</p>";
        header("refresh:5; url=?");

    }

?>