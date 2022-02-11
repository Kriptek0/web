<?php

require_once "router.php";
require_once "base.php";
require_once "user.php";
$url = Router::parse();

$pagelink = $url = "" ? "index" : $url;

if (!file_exists("contents/$pagelink.php"))
    $pagelink = "404";

$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
    
$connection = [
    "dsn" => "mysql: host=localhost; dbname=web; charset=utf8;",
    "user" => "root",
    "password" => "root",
    "options" => $options
];

unset($options);

$base = new Base($connection);

unset($connection);

if(isset($_POST["entrance"]))
{
    $login = $_POST["login"];
    $password = $_POST["password"];
    $user = $base->loadUser($login, $password);

    if($user == false)
        $info = "Не верный логин или пароль ";
    else
    {
        $info = "Вы пошли под именем " . $user->getName();
    }
}


if(isset($_POST["send"])){
    $name = $_POST["name"];
    $login = $_POST["login"];
    $password = $_POST["password"];
    $password2 = $_POST["one_more_pass"];

    if($password != $password2)
        $info = "Пароли не совпали!";
    else{
        $user = new User($name, $login, $password);
        $userData = $base->saveUser($user);
        if($userData == false)
            $info = "Не зарегистрированы";
        else
            $info = "Зарегистрированы";
    }
}



switch($pagelink)
{
    case "index":
        $title="Главная страница";
        break;
    case "login":
        $title="Авторизация";
        break;
    case "registration":
        $title="Регистрация";
        break;
    default:
        $title="Ошибка";
}

require "template/header.php";
require "template/sidebar.php";
require "contents/$pagelink.php";
require "template/footer.php";