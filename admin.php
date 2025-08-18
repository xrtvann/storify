<?php

class Admin extends User {
   public function __construct($id, $name, $username, $password) {
      parent::__construct($id, $name, $username, $password, 'admin');
   }

   public function getAccess()
   {
      return "Full access granted.";
   }
}

?>