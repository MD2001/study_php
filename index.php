<?php
require "functions.php";

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


$routes=[
    "/" => "controlers/Index.php",
    "/about" => "controlers/about.php",
    "/contact" => "controlers/contact.php"
];


if(array_key_exists($uri,$routes))
{
    require $routes[$uri];
}