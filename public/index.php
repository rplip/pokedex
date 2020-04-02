<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
    'GET', 
    '/test',
    [
        'controller' => "App\Controllers\MainController",
        'method' => "test"
    ], 
    'test'
);


$router->map(
    'GET',
    '/',
    [
        'controller' => "App\Controllers\MainController",
        'method' => "home"
    ],
    'home'
);

$router->map(
    'GET',
    '/detail/[i:id]',
    [
        'controller' => "App\Controllers\MainController",
        'method' => "detail"
    ],
    'detail'
);

$router->map(
    'GET',
    '/types',
    [
        'controller' => "App\Controllers\MainController",
        'method' => "types"
    ],
    'types'
);

$router->map(
    'GET',
    '/element/[i:id]',
    [
        'controller' => "App\Controllers\MainController",
        'method' => "element"
    ],
    'element'
);

$match = $router->match();

if($match === false) {
    $controllerName = "App\Controllers\MainController";
    $methodName = "notFound";
} else {
    $target = $match['target'];
    $controllerName = $target['controller'];
    $methodName = $target['method'];
}

$controller = new $controllerName($router);
$controller->$methodName($match['params']);