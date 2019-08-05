<?php
require_once('../www/Product.class.php');
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase{

    public function testProductName(){
        $productName;
        $produit = new Product($productName,2,3.0);
        $this->assertTrue($produit->getNom()!==false);
    }

}


?>