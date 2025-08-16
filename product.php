<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $stock;

    public function __construct($id, $name, $price, $stock)
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

echo $product1->getProductInfo();

?>