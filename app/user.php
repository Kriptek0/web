<?php

class User
{
    protected $name;
    protected $login;
    protected $password;

    public function getName() { return $this->name; }
    public function getLogin() { return $this->login; }
    public function getPassword() { return $this->password; }

    public function __construct($name,$login,$password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;    
    }
}