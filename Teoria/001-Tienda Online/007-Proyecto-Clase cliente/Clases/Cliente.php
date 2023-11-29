<?php

    class Cliente{
        private $nombre;
        private $apellidos;
        private $email;
        private $telefono;

        public function __construct($nombre, $apellidos, $email, $telefono){
            $this -> nombre = $nombre;
            $this -> apellidos = $apellidos;
            $this -> email = $email;
            $this -> telefono = $telefono;
        }

    }

?>