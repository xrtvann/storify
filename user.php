<?php

class User
{
    public $id;
    public $name;
    public $username;
    public $password;

    public $role;

    public function __construct($id = null, $name = null, $username = null, $password = null, $role = 'customer')
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

    public function getAccess() {
        if ($this->role === 'Admin') {
            return "Full access granted.";
        } else {
            return "Limited access granted.";
        }
    }
}

$user1 = new User(1, "John Doe", "johndoe", "password123", "Admin");
$user2 = new User(2, "Jane Smith", "janesmith", "password456");
echo $user1->getUserInfo();
echo "<br>";
echo $user1->getAccess();
echo "<br>";

echo $user2->getUserInfo();
echo "<br>";
echo $user2->getAccess();
echo "<br>";

?>