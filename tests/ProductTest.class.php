<?php
require_once('../www/Product.class.php');
use PHPUnit\Framework\TestCase;

class ProductTest extends PHPUnit_Framework_TestCase{
    public function setUp(){}
    public function tearDown(){}

    
    public function testProductName(){
        $productName = 'carotte';
        $produit = new Product($productName,2,3.0);
        $this->assertTrue($produit->getNom()!==false);
    }

}


?>