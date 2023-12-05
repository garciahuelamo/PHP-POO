<?php


    class client{
        private $name;
        private $surname;
        private $address;
        private $email;
        private $telephone;

        public function __construct($name, $surname, $address, $email, $telephone){
            $this -> name = $name;
            $this -> surname = $surname;
            $this -> address = $address;
            $this -> email = $email;
            $this -> telephone = $telephone;
        }
    }

?>