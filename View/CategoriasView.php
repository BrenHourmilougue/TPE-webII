<?php

    require_once "./libs/smarty/Smarty.class.php";

    class CategoriasView{

        private $title;
        private $smarty;
        
        function __construct(){
            $this->title = "Tabla de Categorias";
            $this->smarty = new Smarty();
        }
        //MUESTRO LA TABLA DE CATEGORIAS
        function ShowCategorias($categoria){
            $this->smarty->assign('titulo', $this->title);
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->display('templates/categorias.tpl');
        }
        //VISTA PARA EDITAR UNA CATEGORIA
        function ShowEditCategoria($categoria){
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->display('templates/editCategoria.tpl');  
        }
    }
?>