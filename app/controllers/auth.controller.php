<?php
require_once './app/views/auth.view.php';
require_once './app/models/user.model.php';

class AuthController {
    private $view;
    private $model;
    
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function showFormLogin() {
        $this->view->showFormLogin();
    }
    public function showRegister() {
        $this->view->showRegister();
    }

    public function validateUser() {
        // toma los datos del form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // busco el usuario por username
        $usuarios = $this->model->getUserByUsername($username);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($usuarios && password_verify($password, $usuarios->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_NAME'] = $usuarios->username;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
            
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
    public function register(){
        //Creo la cuenta cuando venga en el POST
        if(!empty($_POST['username'])&& !empty($_POST['password'])){
            $username=$_POST['username'];
            $userPassword=password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->model->register($username,$userPassword);
            $this->validateUser();
        }

    }
}