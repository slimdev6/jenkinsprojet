<?php

class Product{
    const FOOD_PRODUCT = 'nourriture';
    private $nom;
    private $type;
    private $prix;


    public function __contruct($nom,$type,$prix){
        $this->name=$nom;
        $this->type=$type;
        $this->prix = $prix;
    }

    public function setNom($nom){
        if(Is_Numeric($nom)){
            return false;
        } else{
            $this->nom = $nom;
            return true;

        }
    }

    public function getNom(){
        return $this->nom;
    }

    public function setPrix($prix){
        $this->nom = $nom;
    }

    public function getPrix(){
        return $this->prix;
    }
    

}