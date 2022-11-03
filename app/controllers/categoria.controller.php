<?php
require_once './app/models/categoria.model.php';
require_once './app/views/categoria.view.php';
require_once './app/helpers/auth.helper.php';

class CategoriasController{
    private $model;
    private $view;
    public function __construct(){
        $this->model=new CategoriasModel();
        $this->view=new CategoriasView();
    }

    public function showCategorias(){
        $categorias=$this->model->getAllCategorias();
        $this->view->showCategorias($categorias);
    }
}