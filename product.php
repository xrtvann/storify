<?php

class Product
{
    protected $id, $name, $price, $stock, $category, $discount;

    public function __construct($id, $name, $price, $stock, $category = null, $discount = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
        $this->category = $category;
        $this->discount = $discount;
    }

    public function setName(string $name)
    {
        if (trim($name) !== '' && is_string($name)) {
            $this->name = $name;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        if (is_numeric($price) && $price > 0 && $price !== null) {
            $this->price = $price;
        }
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setStock($stock)
    {
        if (is_numeric($stock) && $stock >= 0 && $stock !== null) {
            $this->stock = $stock;
        }
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setCategory($category)
    {
        if (is_string($category) && trim($category) !== '') {
            $this->category = $category;
        }
    }

    public function getCategory()
    {
        return $this->category;
    }

 

    public function setDiscount($discount)
    {
        $this->discount = $discount;
        $this->price -= $this->price * ($discount / 100);
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}

?>