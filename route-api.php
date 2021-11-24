<?php
    require_once('Router.php');
    require_once('./Controller/ComentariosApiController.php');
    
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');



    $router = new Router();

    $router->addRoute("/comentarios/:ID_ARTICULO", "GET", "ComentariosApiController", "getComentariosByArticulo");
    $router->addRoute("/comentarios/:ID", "DELETE", "ComentariosApiController", "deleteComentario");
    $router->addRoute("/comentarios", "POST", "ComentariosApiController", "insertarComentario");

    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 
