<?php
require_once('../www/Product.class.php');
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase{

    public function testProductName(){
        $productName = '0';
        $produit = new Product("ss",2,3.0);
        //$this->assertTrue($produit->getNom()!==false);
        $this->assertTrue($produit->setNom("10") !==false);
    }

}


?>