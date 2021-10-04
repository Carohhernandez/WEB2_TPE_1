<?php
require_once "Controller/ArticuloController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$articuloController = new ArticuloController();


switch ($params[0]) {
    case 'home': 
        $articuloController->showHome(); 
        break;
    case 'createArticulo': 
        $articuloController->createArticulo(); 
        break;
    case 'deleteArticulo': 
        $articuloController->deleteArticulo($params[1]); 
        break;
    case 'viewArticulo': 
        $articuloController->viewArticulo($params[1]); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}


?>
