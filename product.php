<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $stock;

    public function __construct($id = null, $name = null, $price = 0, $stock = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getProductInfo()
    {
        return "ID: $this->id, Name: $this->name, Price: $this->price, Stock: $this->stock";
    }
}

$product1 = new Product(92398298, "Air Mineral", 3000, 50);
$product2 = new Product(92398299, "Coca Cola", 10000, 30);
$product3 = new Product();
echo $product1->getProductInfo();
echo $product2->getProductInfo();
echo $product3->getProductInfo();
?>