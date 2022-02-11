<?php

require_once "user.php";

class Base{
    protected $base;
    public function __construct($connection){
        try
        {
            $this->base = new PDO($connection["dsn"], $connection["user"],
            $connection["password"], $connection["options"]);
        }
        
        catch (PDOException $ex)
        {
            die("connect error: " . $ex->getMessage());
        }
    }

    public function saveUser($user)
    {
        $query = $this->base->prepare("INSERT INTO users (name, login, password)
        VALUES (:name, :login, :password);");

        $query->bindValue(":login", $user->getLogin());
        $query->bindValue(":name", $user->getName());
        $query->bindValue(":password", $user->getPassword());

        try{
            $query->execute();
        }
        catch (PDOException $ex){
            return false;
        }

        return true;
    }

    public function loadUser($login, $password)
    {
        $query = $this->base->prepare("SELECT * FROM `users` WHERE `login` = :login LIMIT 1;");
        $query->bindValue(":login", $login);
        try
        {
            $query->execute();
        }
        catch (PDOException $ex)
        {
            die("select error: " . $ex->getMessage());
        }

        $data = $query->fetch(PDO::FETCH_ASSOC);

        if(!$data)
            return false;
        
        if($password != $data["password"])
            return false;

        return new User($data["name"], $data["login"], $data["password"]);
        unset($userData);

    }

}

