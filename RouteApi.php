<?php
    require_once 'RouterClass.php';
    require_once 'api/ApiCommentController.php';

    // instacio el router
    $router = new Router();

    //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
?>