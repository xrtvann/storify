<?php

class User
{
    protected $id, $name, $username, $password, $role;

    public function __construct($id, $name, $username, $password, $role = 'customer')
    {
        $this->id = $id;
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
    }

    public function setName(string $name)
    {
        if (is_string($name) && trim($name) !== '') {
            $this->name = $name;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function setUsername(string $username)
    {
        if (is_string($username) && trim($username) !== '') {
            $this->username = $username;
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword(string $password)
    {
        if (is_string($password) && trim($password) !== '') {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setRole(string $role)
    {
        if (in_array($role, ['customer', 'admin'])) {
            $this->role = $role;
        }
    }

    public function getRole()
    {
        return $this->role;
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