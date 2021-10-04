<?php
require_once "./Model/ArticuloModel.php";

class ArticuloController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new ArticuloModel();
    }

    function showHome(){
        $articulos = $this->model->getArticulos();
        $this->view->showArticulos($articulos);
    }

    function viewArticulo($id){
        $articulo = $this->model->getArticulo($id);
        $this->view->showArticulo($articulo);
    }

    function createArticulo(){
        $this->model->insertArticulo($_POST['title'], $_POST['contenido'], $_POST['imagen'], $_POST['pais']);
        $this->view->showHomeLocation();
    }

    function deleteArticulo($id){
        $this->model->deleteArticulo($id);
        $this->view->showHomeLocation();
    }
}
