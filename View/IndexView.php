<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class IndexView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function viewPaises($paises){      
        $this->smarty->assign('paises', $paises);
        $this->smarty->display('templates/index-view.tpl');
    }

    function viewArticulos($articulos){
        $this->smarty->assign('articulos', $articulos);
        $this->smarty->assign('titulo', 'Todos nuestros articulos');
        $this->smarty->display('templates/articulos-view.tpl');
    }

    function viewArticulosByPais($articulos, $pais){
        $this->smarty->assign('articulos', $articulos);
        $this->smarty->assign('pais', $pais);
        $this->smarty->assign('titulo', 'Articulos sobre');
        $this->smarty->display('templates/articulos-view.tpl');
    }
}
