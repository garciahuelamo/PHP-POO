<?php

    class shoppingCart{
        private $products;
        private $client;
        private $total;

        public function __construct(){
            $this -> products = [];
            $this -> client;
            $this -> total;
        }
        
        public function anadirProducto($products){
            array_push($this -> products, $products);
        }

        public function listProducts(){
            return $this -> products;
        }
    }

?>