<?php

require_once 'user.php';
require_once 'admin.php';
require_once 'customer.php';
require_once 'product.php';

$product = new Product(1, 'Baru', 100, 50);
$product->setName('Air Mineral');
var_dump($product->getName());
