<?php

require_once __DIR__."/../vendor/autoload.php";

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;
use App\Core\Router;
use App\Core\Request;

App::bind('config', require_once __DIR__."/../config.php");

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data=[]){

    extract($data);

    return require_once "app/views/{$name}.view.php";
}

function redirect($location){

    header("Location: /{$location}");

}

Router::load()->direct(
    Request::uri(),
    Request::method()
);
