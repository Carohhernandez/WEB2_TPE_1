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

    function viewArticulos($paginaActual){
        $session = $this->authHelper->checkLoggedIn();
        $paises = $this->model->getPaises();
        $paginaActual = isset($paginaActual) ? $paginaActual : 1;
        $postPorPagina = 5;
        $inicio = ((int)$paginaActual > 1) ? ((int)$paginaActual * $postPorPagina - $postPorPagina) : 0;
        $articulos = $this->model->getArticulos($inicio, $postPorPagina);
        $totalArticulos = $this->model->getTotalArticulos();
        $numeroDePaginas = ceil((int)$totalArticulos / (int)$postPorPagina);
        $this->view->viewArticulos($articulos, $session, $paises, $paginaActual, $numeroDePaginas);
    }

    function viewArticulosByPais($paginaActual, $pais){
        $session = $this->authHelper->checkLoggedIn();
        //puede que haya un pais sin articulos
        $paginaActual = isset($paginaActual) ? $paginaActual : 1;
        $postPorPagina = 5;
        $inicio = ((int)$paginaActual > 1) ? ((int)$paginaActual * $postPorPagina - $postPorPagina) : 0;
        $articulos = $this->model->getArticulosByPais($pais, $inicio, $postPorPagina);
        $totalArticulos = $this->model->getTotalArticulosByPais($pais);
        $numeroDePaginas = ceil((int)$totalArticulos / (int)$postPorPagina);
        $this->view->viewArticulosByPais($articulos, $session, $pais, $paginaActual, $numeroDePaginas);
    }

    function createArticulo(){
        $this->model->insertArticulo($_POST['titulo'], $_POST['contenido'], $_POST['imagen'], $_POST['pais']);
        $this->view->showArticuloLocation(1);
    }

    function editArticulo($paginaActual, $id){
        $session = $this->authHelper->checkLoggedIn();
        $editArticulo = $this->model->getArticuloByID($id);
        $paises = $this->model->getPaises();
        $paginaActual = isset($paginaActual) ? $paginaActual : 1;
        $postPorPagina = 5;
        $inicio = ((int)$paginaActual > 1) ? ((int)$paginaActual * $postPorPagina - $postPorPagina) : 0;
        $articulos = $this->model->getArticulos($inicio, $postPorPagina);
        $totalArticulos = $this->model->getTotalArticulos();
        $numeroDePaginas = ceil((int)$totalArticulos / (int)$postPorPagina);
        $this->view->viewArticulos($articulos, $session, $paises, $paginaActual, $numeroDePaginas, $editArticulo);
    }

    function updateArticulo($paginaActual, $id){
        $this->model->updateArticulo($id, $_POST['titulo'], $_POST['contenido'], $_POST['imagen'], $_POST['pais']);
        $paginaActual = isset($paginaActual) ? $paginaActual : 1;
        $this->view->showArticuloLocation($paginaActual);
    }

    function deleteArticulo($paginaActual, $id){
        $this->model->deleteArticulo($id);
        $this->view->showArticuloLocation($paginaActual);
    }
}
