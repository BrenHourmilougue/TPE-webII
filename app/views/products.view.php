<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class ProductsView{
    private $smarty;
    function _construct(){

        $this -> $smarty = new Smarty();

        function showProducts($id_productos,$productos,$marcas, $categorias,$stock,$precio){
            $this->smarty->assign('id_producto', $productos);
            $this->smarty->assign('nombre', $productos);
            $this->smarty->assign('marca', $marcas);
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('stock', $stock);
            $this->smarty->assign('precio', $precio);
            $this->smarty->display('listaProductos.tpl');
        }
    }
}