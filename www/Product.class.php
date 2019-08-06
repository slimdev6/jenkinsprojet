<?php

class Product{
    const FOOD_PRODUCT = 'food';
    private $nom;
    private $type;
    private $price;


    public function __contruct($nom,$type,$price){
        $this->name=$nom;
        $this->type=$type;
        $this->price = $price;
    }

    public function setNom($nom){
            $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setPrice($price){
        $this->nom = $nom;
    }

    public function getPrice(){
        return $this->price;
    }
    

}