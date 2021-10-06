<?php
require_once "./Model/ArticuloModel.php";
require_once "./View/IndexView.php";

class ArticuloController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new ArticuloModel();
        $this->view = new IndexView();
    }

    function viewArticulo($id){
        $articulo = $this->model->getArticulo($id);
        $this->view->viewArticulos($articulo);
    }

    function viewArticulos(){
        $articulos = $this->model->getArticulos();
        $this->view->viewArticulos($articulos);
    }

    function viewArticulosByPais($pais){
        $articulos = $this->model->getArticulosByPais($pais);
        $this->view->viewArticulosByPais($articulos, $pais);
    }

    function createArticulo(){
        $this->model->insertArticulo($_POST['title'], $_POST['contenido'], $_POST['imagen'], $_POST['pais']);
    }

    function deleteArticulo($id){
        $this->model->deleteArticulo($id);
    }
}
