<?php
require_once "./Model/PaisModel.php";
require_once "./View/IndexView.php";

class PaisController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new PaisModel();
        $this->view = new IndexView();
    }

    function getPaises(){
        $paises = $this->model->getPaises();
        $this->view->showIndex($paises);
    }

    function createPais(){
        $this->model->insertPais($_POST['nombre']);
    }

    function deletePais($id){
        $this->model->deletePais($id);
    }
}
