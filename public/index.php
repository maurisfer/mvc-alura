<?php

require __DIR__ .'/../vendor/autoload.php';

use Alura\Cursos\Controller\InterfaceControladorRequisicao;


var_dump($path = $_SERVER['REQUEST_URI']); exit();
$routes =  require __DIR__ .'/../config/routes.php';

if (!array_key_exists($path, $routes)) {
    http_response_code(404);
}

$controllerClass = $routes[$path];
$controller = new $controllerClass();
$controller->processaRequisicao();

