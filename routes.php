<?php

use Classes\Controller\BrandController;

$router = new AltoRouter();

$router->map( 'GET', '/brand', function() {
    $route = new BrandController();
    var_dump($route);
    $route->index();
});

$router->map( 'GET', '/add', function() {
    $route = new BrandController();
    $route->add();
});

$match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}