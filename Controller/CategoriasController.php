<?php

    require_once "./View/CategoriasView.php";
    require_once "./Model/CategoriasModel.php";
    require_once "./View/LoginView.php";
    require_once "./View/ProductsView.php";
    require_once "Helper.php";

    class CategoriasController extends Helper{

        private $categoriaView;
        private $categoriaModel;
        private $productsView;

        function __construct(){
            $this->categoriaView = new CategoriasView();
            $this->categoriasModel = new CategoriasModel
    ();
            $this->productsView = new ProductsView();
        }
        //LLAMA AL HOME DE CATEGORIAS
        function HomeCategorias(){
            $categorias = $this->categoriasModel->GetCategorias();
            $this->categoriaView->ShowCategorias($categorias);
        }
        //INSERTA UNA NUEVA CATEGORIA
        function InsertCategoria(){
            $logeado = $this->CheckLoggedIn();
            if($logeado && $_SESSION['ADMIN'] == 1){
                if (isset($_POST['input_categoria'])) {
                    $categoria = $_POST['input_categoria'];
                    $id_categoria = 0;
                    $this->categoriasModel->InsertCategoria($id_categoria,$categoria);
                }
                $this->productsView->ShowLocation('admin');
            }else{
                $this->productsView->ShowLocation('login');
            }
        }
        //ELIMINA UNA CATEGORIA POR ID
        function DeleteCategoria($params = null){
            $logeado = $this->CheckLoggedIn();
            if($logeado && $_SESSION['ADMIN'] == 1){
                $categoria_id = $params[':ID'];
                $this->categoriasModel->DeleteCategoria($categoria_id);
                $this->productsView->ShowLocation('admin');
            }else{
                $this->productsView->ShowLocation('login');
            }
        }
        //LLAMA LA VISTA PARA EDITAR UNA CATEGORIA POR ID
        function EditCategoria($params = null){
            $logeado = $this->CheckLoggedIn();
            if($logeado && $_SESSION['ADMIN'] == 1){
                $categoria_id = $params[':ID'];
                $categoria = $this->categoriasModel->GetCategoriaById($categoria_id);
                $this->categoriasView->ShowEditCategoria($categoria);
            }else{
                $this->productsView->ShowLocation('login');
            }
        }
        //LLAMA A ACTUALIZAR UNA CATEGORIA
        function UpdateCategoria($params = null){
            $logeado = $this->CheckLoggedIn();
            if($logeado && $_SESSION['ADMIN'] == 1){
                $categoria_id = $params[':ID'];
                if (isset($_POST['edit_categoria']) && isset($_POST['edit_category'])) {
                    $categoria = $_POST['edit_categoria'];
                    $category = $_POST['edit_category'];
                    $this->categoriasModel->UpdateCategoria($categoria,$categoria_id);
                }
                $this->productsView->ShowLocation('admin');
            }else{
                $this->productsView->ShowLocation('login');
            }
        }
    }
?>