<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';
require_once './app/helpers/auth.helper.php';
require_once './app/controllers/auth.controller.php';

class ProductsController {
    private $model;
    private $view;
    private $categoriasModel;
    private $categoriasView;
    private $authHelper;
    private $authController;

    public function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
        $authController = new AuthController();

        //barrera de seguridad
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();
    }

    public function showProducts() {
        $productos = $this->model->getAllProducts();

        $this->view->showProducts($productos);
    }

    function showAddProducts(){
        $loggeado = $this->authHelper->checkLoggedIn();
        $categorias = $this->categoriasModel->getAllCategorias();
        if($loggeado){
        $this->view->showAddProducts($categorias);
        }
        else{
            $this->authController->showFormLogin();
        }
    }
    
    function addProduct() {
        // TODO: validar entrada de datos
        $loggeado = $this->authHelper->checkLoggedIn();
            if($loggeado){
                if (isset($_POST['input_product']) && isset($_POST['input_price']) &&
                    isset($_POST['input_stock']) && isset($_POST['input_description']) && isset($_POST['select_categoria'])) {
                            $codigo= $_POST['codigo'];
                            $nombre= $_POST['nombre'];
                            $marca= $_POST['marca'];
                            $categoria= $_POST['categoria'];
                            $stock= $_POST['stock'];
                            $precio= $_POST['precio'];
                            $id = $this->model->insertProduct($codigo, $nombre, $marca, $categoria, $stock, $precio);

                    }
                }

        
        header("Location: " . BASE_URL); 
    }

    function deleteProduct($id) {
        $this->model->deleteProductById($id);
        
        header("Location: " . BASE_URL);
    }

}
