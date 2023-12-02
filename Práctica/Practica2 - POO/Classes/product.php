<?php

interface showData{
    public function dataGame();
}

abstract class Videogame{
    private $name;
    private $style;
    private $min_year;
    private $price;
    private $description;

    public function __construct($name, $style, $min_year, $price, $description){
        $this -> name = $name;
        $this -> style = $style;
        $this -> min_year = $min_year;
        $this -> price = $price;
        $this -> description = $description;
    }

    public function showName(){
        return $this -> name;
    }

    public function showStyle(){
        return $this -> style;
    }

    public function showMinYear(){
        return $this -> min_year;
    }

    public function showPrice(){
        return $this -> price;
    }

    public function showDescription(){
        return $this -> description;
    }

    public function setName($newName){
        $this -> name = $newName;
    }

    public function setStyle($newStyle){
        $this -> style = $newStyle;
    }

    public function setMinYear($newMinYear){
        $this -> min_year = $newMinYear;
    }

    public function setPrice($newPrice){
        $this -> price = $newPrice;
    }

    public function setDescription($newDescription){
        $this -> description = $newDescription;
    }
        
    public function dataGame(){
        return [$this -> name, $this -> style, $this -> min_year, $this -> price, $this -> description];
    }
}

class DigitalVideogame extends Videogame implements showData {
    private $website;
    private $discount;

    public function __construct($name, $style, $min_year, $price, $description, $website, $discount){
        return[
            $this -> setName($name),
            $this -> setStyle($style),
            $this -> setMinYear($min_year),
            $this -> setPrice($price),
            $this -> setDescription($description),
            $this -> website = $website,
            $this -> discount = $discount
        ];
    }

    public function showData(){
        return[
            $this -> showName(),
            $this -> showStyle(),
            $this -> showMinYear(),
            $this -> showPrice(),
            $this -> showDescription(),
            $this -> website,
            $this -> discount
        ];
    }
}

class PhysicalVideogame extends Videogame implements showData{
    private $shop;
    private $status;

    public function __construct($name, $style, $min_year, $price, $description, $shop, $status){
        return[
            $this -> setName($name),
            $this -> setStyle($style),
            $this -> setMinYear($min_year),
            $this -> setPrice($price),
            $this -> setDescription($description),
            $this -> shop = $shop,
            $this -> status = $status
        ];
    }

    public function showData(){
        return[
            $this -> showName(),
            $this -> showStyle(),
            $this -> showMinYear(),
            $this -> showPrice(),
            $this -> showDescription(),
            $this -> shop,
            $this -> status
        ];
    }
}

?>