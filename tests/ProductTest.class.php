<?php
require_once('../www/Product.class.php');
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase{

    public function testProductName(){
        $productName = '0';
        $produit = new Product("ss",2,3.0);
        //$this->assertTrue($produit->getNom()!==false);
        $this->assertSame("ttt",Product::FOOD_PRODUCT);
    }

}

if ($build_error) exit(1);
?>