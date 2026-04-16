<?php

$routes = require 'routes.php';

//parse uri function shows you the path and the query
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];


function routeToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
    require $routes[$uri];
} else{
    abort(404);
}
};

routeToController($uri, $routes);