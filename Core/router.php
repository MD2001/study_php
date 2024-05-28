<?php

namespace Core;

class Router
{

    protected $routes = [];

    public function readRoutes()
    {
        return $this->routes;
    }

    public function get($uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "GET"
        ];
    }
    public function post($uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "POST"
        ];
    }
    public function delete($uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "DELETE"
        ];
    }
    public function put($uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "PUT"
        ];
    }

    public function patch($uri, $controller)
    {
        $this->routes[] = [
            "uri" => $uri,
            "controller" => $controller,
            "method" => "PATCH"
        ];
    }

    public function rout($uri,$method)
    {
        foreach($this->routes as $rout)
        {
            if($rout['uri']===$uri && $rout["method"]=== strtoupper($method))
            {
                return require base_path($rout["controller"]);
            }
            
        }

       $this-> abort();
    }


    public function abort($code = 404)
    {
        http_response_code($code);
        require base_path("Views/{$code}.php");
        die();
    }
}


