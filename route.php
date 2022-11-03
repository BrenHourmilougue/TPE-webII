<?php
require_once './app/controllers/product.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'productos'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// tabla de ruteo
switch ($params[0]) {
    case 'register':
        $authController = new AuthController();
        $authController->showRegister();
        break;
        case 'newUser':
            $authController = new AuthController();
            $authController->register();
            break;
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'productos':
        $productController = new ProductsController();
        $productController->showProducts();
        break;
    case 'nuevoProducto':
        $productController = new ProductController();
        $productController->addProduct();
        break;
    case 'nuevaCategoria':
        $categoriaController = new CategoriaController();
        $categoriaController->addCategoria();
        break;
    case 'delete':
        $productController = new ProductController();
        // obtengo el parametro de la acción
        $id = $params[1];
        $productController->deleteProduct($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
