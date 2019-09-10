<?php

namespace App\Core;

class Router
{
    protected $routes = [
        'GET'=>[],
        'POST'=>[]
    ];

    public static function load()
    {
        $router = new static;
        require_once __DIR__."/../app/routes.php";
        return $router;
    }


    public static function isActive($slug='')
    {
        if (Request::uri() == $slug){
            return true;
        }

        return false;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new \Exception('No route defined for this URI.');
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    protected function callAction($controller, $action)
    {

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controller->$action();
    }
}
