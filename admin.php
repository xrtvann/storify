<?php

class Admin extends User {
    public $role = 'admin';

   public function __construct($id = null, $name = null, $username = null, $password = null, $role = null)
   {
      $this->id = $id;
      $this->name = $name;
      $this->username = $username;
      $this->password = $password;
      $this->role = $role;
   }
}

?>