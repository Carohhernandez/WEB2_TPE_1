<?php
require_once "./Model/PaisModel.php";
require_once "./View/PaisView.php";
require_once "./Helpers/AuthHelper.php";

class PaisController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new PaisModel();
        $this->view = new PaisView();
        $this->authHelper = new AuthHelper();
    }

    function getPaises(){
        $paises = $this->model->getPaises();
        $session = $this->authHelper->checkLoggedIn();
        $this->view->showIndex($paises, $session);
    }

    function createPais(){
        $this->model->insertPais($_POST['nombre']);
        $this->view->showHomeLocation();
    }

    function editPais($id){
        $pais = $this->model->getPais($id);
        $paises = $this->model->getPaises();
        $session = $this->authHelper->checkLoggedIn();
        $this->view->showIndex($paises, $session, $pais);
    }

    function updatePais($id){
        $this->model->updatePais($id, $_POST['nombre']);
        $this->view->showHomeLocation();
    }

    function deletePais($id){
        $this->model->deletePais($id);
        $this->view->showHomeLocation();
    }
}
