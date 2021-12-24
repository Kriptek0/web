<?php

class Router
{
    public static function parse()
    {
        $url = explode("?", $_SERVER["REQUEST_URI"]);
        $url = urldecode($url[0]);
        $url = explode("/", $url);
        $url = array_pop($url);
        return $url;
    }

}