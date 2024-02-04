<?php


    class client implements JsonSerializable{
        private $name;
        private $surname;
        private $email;
        private $telephone;

        public function __construct($name, $surname, $address, $email, $telephone){
            $this -> name = $name;
            $this -> surname = $surname;
            $this -> email = $email;
            $this -> telephone = $telephone;
        }

        public function JsonSerialize(){
            return[
                'name' => $this -> name,
                'surname' => $this -> surname, 
                'email' => $this -> email,
                'telephone' => $this -> telephone
            ];
        }
    }

?>