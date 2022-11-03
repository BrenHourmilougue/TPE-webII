<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';
require_once './app/helpers/auth.helper.php';

class ProductsController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
/*
        // barrera de seguridad
        $authHelper = new AuthHelper();
        $authHelper->checkLoggedIn();*/
    }

    public function showProducts() {
        $productos = $this->model->getAllProducts();
        $this->view->showProducts($productos);
    }

    /*
    function addProduct() {
        // TODO: validar entrada de datos

        $title = $_POST['title'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];

        $id = $this->model->insertProduct($title, $description, $priority);

        header("Location: " . BASE_URL); 
    }
   */
    function deleteProduct($id) {
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL);
    }

}
