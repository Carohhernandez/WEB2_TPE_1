<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";
require_once "./Helpers/AuthHelper.php";

class LoginController {

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }

    function login(){
        $sessionStarted = $this->authHelper->checkLoggedIn();
        if(!$sessionStarted){
            $this->view->showLogin("", $sessionStarted);
        } else {
            $this->view->showHome();
        }
        //$this->model->insertAdmin(); //para insertar admin
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste!", false);
    }

    function register(){
        $sessionStarted = $this->authHelper->checkLoggedIn();
        if(!$sessionStarted){
            $this->view->showRegister('',$sessionStarted);
        } else {
            $this->view->showHome();
        };
    }

    function createUser(){
        if (!empty($_POST['email']) && !empty($_POST['password']) && (isset($_POST['email']) && isset($_POST['password']))) {
            $email = $_POST['email'];
            $password = $_POST['password'];
     
            // Busco si el email del usuario esta registrado
            $user = $this->model->getUser($email);

            if (!$user) {
                // Si no esta registrado, lo creo
                $this->model->insertUser($email, $password);

                // despues de insertar el usuario nuevo, lo logueo
                session_start();
                $user = $this->model->getUser($email);
                $_SESSION["email"] = $user->email;
                $_SESSION["role"] = $user->admin_role;
                
                $this->view->showHome();
            } else {
                // Si esta registrado, lo aviso
                $this->view->showRegister("El usuario ya existe!", false);
            }
        }
    }

    function verifyLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
     
            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);

            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {

                session_start();
                $_SESSION["email"] = $user->email;
                $_SESSION["role"] = $user->admin_role;
                
                $this->view->showHome();

            } else {
                $this->view->showLogin("Acceso denegado", false);
            }
        }
    }


}