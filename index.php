<?php

require_once 'user.php';
require_once 'admin.php';
require_once 'customer.php';

    $user1 = new Admin(11, 'John Doe', 'johndoe', 'password123');
    $user2 = new Customer(12, 'Jane Smith', 'janesmith', 'password456');

    echo $user1->getUserInfo();
    echo "<br>";
    echo $user1->getAccess();
    echo "<br>";

    echo $user2->getUserInfo();
    echo "<br>";
    echo $user2->getAccess();
    echo "<br>";
?>