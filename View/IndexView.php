<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class IndexView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function showIndex($paises){      
        $this->smarty->assign('paises', $paises);

        $this->smarty->display('templates/index-view.tpl');
    }

    function showTask($task){
        $this->smarty->assign('task', $task);
        $this->smarty->display('templates/taskDetail.tpl');
     }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showLoginLocation(){
        header("Location: ".BASE_URL."login");
    }
    
}
