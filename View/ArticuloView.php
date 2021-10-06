<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class IndexView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function viewArticulo($articulo){
        $this->smarty->assign('articulo', $articulo);
    }

}