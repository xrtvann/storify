<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $stock = 50;

    public function getProductInfo()
    {
        return "ID: $this->id, Name: $this->name, Price: $this->price, Stock: $this->stock";
    }
}

$product1 = new Product();
$product1->id = 101;
$product1->name = "Product 1";
$product1->price = 29.99;

echo $product1->getProductInfo();

?>