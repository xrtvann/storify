<?php

class Customer extends User
{
   public function __construct($id, $name, $username, $password) {
        parent::__construct($id, $name, $username, $password, 'customer');
   }
}

?>