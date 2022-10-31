<?php

require_once './app/model/users.model.php';
require_once './app/view/auth.view.php';

class AuthController {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new UserModel();
        $this->view = new Authview();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }

    public function validateUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getUserByUsername($username);

        if ($user && password_verify($password, $user->password)){
            session_start();
            $_SESSION['USER_NAME'] = $user->username;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        }
        else{
            $this->view->showFormLogin("el usuario o la contraseña son incorrectos");
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}

?>