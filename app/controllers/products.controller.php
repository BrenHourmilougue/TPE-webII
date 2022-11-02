<?php
require_once './app/views/products.view.php';
require_once './app/models/products.model.php';
class ProductsController {

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ProductsModel();
        $this->view = new ProductsView();
    }

    function showProducts(){
        $dinos = $this->model->getProducts();
        $this -> view -> showProducts($id_productos,$productos,$marcas, $categorias,$stock,$precio);
    }
}