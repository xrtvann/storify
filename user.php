<?php

class User
{
    public $id;
    public $name;
    public $username;
    public $password;

    public $role;

    public function __construct($id = null, $name = null, $username = null, $password = null, $role = 'user')
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
}

$user1 = new User(1, "John Doe", "johndoe", "password123", "Admin");
$user2 = new User(2, "Jane Smith", "janesmith", "password456");
echo $user1->getUserInfo();
echo "<br>";
echo $user2->getUserInfo();
echo "<br>";

?>