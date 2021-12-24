<?php

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

    public function saveUser($name, $login, $password){
        $query = $this->base->prepare("INSERT INTO users (name, login, password)
        VALUES (:name, :login, :password);");
        $query->bindValue(":login", $login);
        $query->bindValue(":name", $name);
        $query->bindValue(":password", $password);

        try{
            $query->execute();
        }
        catch (PDOException $ex){
            return false;
        }

        return true;
    }

}

