<?php

    class shoppingCart implements JsonSerializable{
        private $products;
        private $client;
        private $total;

        public function __construct(){
            $this -> products = [];
            $this -> client;
            $this -> total;
        }
        
        public function addProduct($products){
            array_push($this -> products, $products);
        }

        public function listProducts(){
            return $this -> products;
        }

        public function total(){
            $total = 0;
            foreach($this -> products as $product){
                $total += $product -> showPrice();
            }
            return $total;
        }

        public function addClient($newClient){
            $this->client = $newClient;
        }

        public function jsonSerialize(){
            return[
                'products' => $this -> products,
                'client' => $this -> client, 
                'total' => $this -> total
            ];
        }
    }

?>