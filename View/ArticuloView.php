<?php
require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class ArticuloView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function viewArticulo($articulo, $session){
        $this->smarty->assign('titulo', $articulo->titulo);
        $this->smarty->assign('imagen', $articulo->imagen);
        $this->smarty->assign('login', $session);
        $this->smarty->assign('contenido', $articulo->contenido);
        $this->smarty->display('templates/single-view.tpl');
    }

    function viewArticulos($articulos, $session, $paises, $editArticulo=null){
        $this->smarty->assign('articulos', $articulos);
        $this->smarty->assign('login', $session);
        $this->smarty->assign('paises', $paises);
        $this->smarty->assign('editArticulo', $editArticulo);
        $this->smarty->display('templates/articulos-view.tpl');
    }

    function viewArticulosByPais($articulos, $session, $pais){
        $this->smarty->assign('articulos', $articulos);
        $this->smarty->assign('pais', $pais);
        $this->smarty->assign('login', $session);
        $this->smarty->display('templates/articulos-view.tpl');
    }

    function showArticuloLocation(){
        header("Location: ".BASE_URL."Articulos");
    }
}
