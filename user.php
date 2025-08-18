<?php

class User
{
    public $id;
    public $name;
    public $username;
    public $password;

    public $role;

    public function __construct($id, $name, $username, $password, $role = 'customer')
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    public function getUserInfo()
    {
        $str = "Welcome {$this->role} {$this->name}";
        return $str;
    }

    public function getAccess()
    {
        return "Limited access granted.";
    }
}

?>