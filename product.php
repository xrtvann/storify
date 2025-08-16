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

class PrintProductInfo
{
    public static function printInfo(Product $product)
    {
        return $product->getProductInfo();
    }
}

$product1 = new Product(92398298, "Air Mineral", 3000, 50);



$printProduct1 = new PrintProductInfo();
echo $printProduct1->printInfo($product1);
?>