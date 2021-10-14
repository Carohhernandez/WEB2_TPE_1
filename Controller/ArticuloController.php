<?php
require_once "./Model/ArticuloModel.php";
require_once "./View/ArticuloView.php";

class ArticuloController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new ArticuloModel();
        $this->view = new ArticuloView();
        $this->authHelper = new AuthHelper();
    }

    function viewArticulo($pais, $titulo){
        $session = $this->authHelper->checkLoggedIn();
        $articulo = $this->model->getArticulo($pais,$titulo);
        $this->view->viewArticulo($articulo,$session);
    }

    function viewArticulos(){
        $session = $this->authHelper->checkLoggedIn();
        $articulos = $this->model->getArticulos();
        $paises = $this->model->getPaises();
        $this->view->viewArticulos($articulos, $session, $paises);
    }

    function viewArticulosByPais($pais){
        $session = $this->authHelper->checkLoggedIn();
        $articulos = $this->model->getArticulosByPais($pais);
        //puede que haya un pais sin articulos
        $this->view->viewArticulosByPais($articulos, $pais, $session);
    }

    function createArticulo(){
        $this->model->insertArticulo($_POST['titulo'], $_POST['contenido'], $_POST['imagen'], $_POST['pais']);
        $this->view->showArticuloLocation();
    }

    function editArticulo($id){
        $session = $this->authHelper->checkLoggedIn();
        $editArticulo = $this->model->getArticuloByID($id);
        $articulos = $this->model->getArticulos();
        $paises = $this->model->getPaises();
        $this->view->viewArticulos($articulos, $session, $paises, $editArticulo);
    }

    function updateArticulo($id){
        $this->model->updateArticulo($id, $_POST['titulo'], $_POST['contenido'], $_POST['imagen'], $_POST['pais']);
        $this->view->showArticuloLocation();
    }

    function deleteArticulo($id){
        $this->model->deleteArticulo($id);
        $this->view->showArticuloLocation();
    }
}
