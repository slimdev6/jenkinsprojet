<?php
use www\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase{

    public function testProductType(){
        $produit = new Product("Burger",2,3.0);
        $this->assertSame("drink",Product::FOOD_PRODUCT);
    }

    public function testProductName(){
        $produit = new Product("Burger",2,3.0);
        $this->assertTrue($produit->getNom()!==false);
    }

    public function testProductPrice(){
        $produit = new Product("Burger",2,450);
        $this->assertTrue($produit->getPrice() < 460);
    }
}


?>