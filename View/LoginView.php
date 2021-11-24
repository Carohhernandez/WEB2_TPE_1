<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class LoginView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showLogin($error = "", $sessionStarted){
        $this->smarty->assign('login', $sessionStarted);
        $this->smarty->assign('error', $error);      
        $this->smarty->display('templates/login-view.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

    function showRegister($error = "", $sessionStarted){
        $this->smarty->assign('login', $sessionStarted);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/register-view.tpl');
    }

}