<?php
require_once './app/controllers/products.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] .':'. $_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/');

$action = 'productos';
if (!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]){
    case 'productos':
    $productosController = new ProductsController();
        $productosController -> showProducts();
        break;
        default:
        echo('404 Page not found');
        break;
}
?>