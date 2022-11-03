<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class CategoriasView{

    private $smarty;

    function __construct(){

        $this-> smarty=new Smarty();
        }
        
        function showCategorias($categorias){
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('listaCategorias.tpl');
    }
}