<?php
require_once './app/controller/productos.controller.php';
require_once './app/controller/categorias.controller.php';
require_once './app/controller/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'login';
if (!empty($_GET['action'])){
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]){

    case 'login';
    $authcontroller = new AuthController();
        $authcontroller->showFormLogin();
    break;
    case 'home';
    $productsController = new productsController();
        $productsController->showHome();
        break;
}