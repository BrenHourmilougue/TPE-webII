<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ferreteria;charset=utf8', 'root', '');
    }

    public function getUserByUsername($username) {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE username = ?");
        $query->execute([$username]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function register($username, $password){
        //Guardo el nuevo usuario en la base de datos
        $query = $this->db->prepare('INSERT INTO usuarios (username, password) VALUES (? , ?)');
        $query->execute([$username,$password]);
    }
}
