<?php
require_once "./Model/UserModel.php";
require_once "./View/UsersAdminView.php";
require_once "./Helpers/AuthHelper.php";
require_once "./View/LoginView.php";

class UserController{

    private $model;
    private $view;
    private $authHelper;
    private $loginView;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new UsersAdminView();
        $this->authHelper = new AuthHelper();
        $this->loginView = new LoginView();
    }

    function getUsers(){
        $session = $this->authHelper->checkLoggedIn();
        if($session && $_SESSION["role"]==1){
            $email = $this->authHelper->getLoggedUserEmail();
            $users = $this->model->getUsers($email);
            $this->view->showUsers($users, $session);
        } else {
            $this->loginView->showHome();
        }
    }

    function changeRole($userId, $role){
        $session = $this->authHelper->checkLoggedIn();
        if($session && $_SESSION["role"]==1){
            $this->model->changeRole($userId, $role);
            $email = $this->authHelper->getLoggedUserEmail();
            $users = $this->model->getUsers($email);
            $this->view->showUsers($users, $session);
        } else {
            $this->loginView->showHome();
        }
    }

    function deleteUser($id){
        $session = $this->authHelper->checkLoggedIn();
        if($session && $_SESSION["role"]==1){
            $this->model->deleteUser($id);
            $email = $this->authHelper->getLoggedUserEmail();
            $users = $this->model->getUsers($email);
            $this->view->showUsers($users, $session);
        } else {
            $this->loginView->showHome();
        }
    }
}