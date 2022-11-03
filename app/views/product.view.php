<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductsView{
    private $smarty;
    function __construct(){

        $this -> smarty = new Smarty();
    }
        
    function showProducts($productos){
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('listaProductos.tpl');
    }

    function showAddProducts($categtorias){
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('nuevoProducto.tpl');
    }
}