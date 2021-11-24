<?php
require_once "Controller/ArticuloController.php";
require_once "Controller/PaisController.php";
require_once "Controller/LoginController.php";
require_once "Controller/UserController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$articuloController = new ArticuloController();
$paisController = new PaisController();
$loginController = new LoginController();
$userController = new UserController();


switch ($params[0]) {
    case 'home': 
        $paisController->getPaises(); 
        break;
    case 'login': 
        $loginController->login(); 
        break;
    case 'logout': 
        $loginController->logout(); 
        break;
    case 'register':
        $loginController->register();
        break;
    case 'createUser':
        $loginController->createUser();
        break;
    case 'verify': 
        $loginController->verifyLogin(); 
        break;
    case 'Articulo':
        if(isset($params[1]) && isset($params[2])){
            $articuloController->viewArticulo($params[1],$params[2]); 
            break;
        }
    case 'Articulos':
        if (isset($params[1]) && isset($params[2])){
            $articuloController->viewArticulosByPais($params[1], $params[2]);
            break;
        } elseif (isset($params[1]) && !isset($params[2])){
            $articuloController->viewArticulos($params[1]); 
            break;
        }
    case 'createPais': 
        $paisController->createPais(); 
        break;
    case 'deletePais': 
        $paisController->deletePais($params[1]); 
        break;
    case 'editPais': 
        $paisController->editPais($params[1]); 
        break;
    case 'updatePais': 
        $paisController->updatePais($params[1]); 
        break;
    case 'createArticulo': 
        $articuloController->createArticulo(); 
        break;
    case 'deleteArticulo': 
        $articuloController->deleteArticulo($params[1], $params[2]); 
        break;
    case 'editArticulo': 
        $articuloController->editArticulo($params[1], $params[2]); 
        break;
    case 'updateArticulo': 
        $articuloController->updateArticulo($params[1], $params[2]); 
        break;
    case 'userAdmin':
        $userController->getUsers();
        break;
    case 'changeRole':
        $userController->changeRole($params[1], $params[2]);
        break;
    case 'deleteUser':
        $userController->deleteUser($params[1]);
        break;
    default: 
        echo('404 Page not found'); 
        break;
}

?>
