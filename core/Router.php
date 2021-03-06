<?php
namespace App\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri,$controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri,$controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@',$this->routes[$requestType][$uri])
            );
        }
        throw new Exception('No route defined for this URI.');
    }

    public function callAction($controller, $method)
    {
        $controller = "App\\Controllers\\{$controller}";

        $controller = New $controller;

        if (! method_exists($controller, $method)) {
            throw new Exception ("No action $method does not exist in the $controlller controller");
        }
        return $controller->$method();
    }
}