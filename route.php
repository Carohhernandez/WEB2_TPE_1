<?php
require_once "Controller/ArticuloController.php";
require_once "Controller/PaisController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$articuloController = new ArticuloController();
$paisController = new PaisController();


switch ($params[0]) {
    case 'home': 
        $paisController->getPaises(); 
        break;
    case 'viewArticulos': 
        $articuloController->viewArticulos(); 
        break;
    case 'viewArticulosByPais': 
        $articuloController->viewArticulosByPais($params[1]); 
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
