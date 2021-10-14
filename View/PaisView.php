<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class PaisView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showIndex($paises, $session, $editPais=null){      
        $this->smarty->assign('paises', $paises);
        $this->smarty->assign('login', $session);
        $this->smarty->assign('editPais', $editPais);
        $this->smarty->display('templates/index-view.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

}
