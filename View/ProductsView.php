<?php

    require_once "./libs/smarty/Smarty.class.php";

    class ProductsView{

        private $title;
        private $titleEdit;
        private $smarty;

        function __construct(){
            $this->title = "Tabla de productos";
            $this->titleEdit = "Editar producto";
            $this->titleCategoria = "Tabla de categorias";
            $this->smarty = new Smarty();
        }
        //REDIRECCIONA LAS CONSTANTES PARA RUTEO
        function ShowLocation($action){
            header("Location: ".BASE_URL.$action);
        }
        //MUESTRA EL HOME
        function ShowHome($products, $categorias, $pagination, $page, $user = null){
            $this->smarty->assign('title', $this->title);
            $this->smarty->assign('products', $products);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('pagination', $pagination);
            $this->smarty->assign('page', $page);
            $this->smarty->assign('user', $user);
            $this->smarty->display('templates/products.tpl');
        }
        //VISTA PARA EDITAR UN PRODUCTO
        function ShowEditProduct($product, $categorias, $images){
            $this->smarty->assign('product', $product);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('images', $images);
            $this->smarty->display('templates/editProduct.tpl');
        }
        //VISTA DE UN PRODUCTO EN DETALLE - TABLA PRODUCTO Y TABLA DE LA CATEGORIA
        function ShowItemDetail($product, $categoria, $images = null, $stars = null, $user = null, $Iduser = null, $admin = null){
            $this->smarty->assign('product', $product);
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('images', $images);
            $this->smarty->assign('stars', $stars);
            $this->smarty->assign('user', $user);
            $this->smarty->assign('Iduser', $Iduser);
            $this->smarty->assign('admin', $admin);
            $this->smarty->display('templates/itemDetail.tpl');
        }
        //VEO LO BUSCADO
        function ShowSearch($products, $categorias, $user=null, $categoria_id = null){
            $this->smarty->assign('title', $this->title);
            $this->smarty->assign('products', $products);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->assign('categoria_id', $categoria_id);
            $this->smarty->assign('user', $user);
            $this->smarty->display('templates/showSearch.tpl');
        }
    }
?>