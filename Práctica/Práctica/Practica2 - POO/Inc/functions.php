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

?>