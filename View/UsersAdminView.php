<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class UsersAdminView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showUsers($users, $session) {
        $this->smarty->assign('users', $users);
        $this->smarty->assign('login', $session);
        $this->smarty->display('templates/user-admin-view.tpl');
    }
}