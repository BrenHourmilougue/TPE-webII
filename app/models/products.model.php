<?php

class ProductsModel{
    
    private $db;

    public function _construct(){
        $this -> db = new PDO('mysql:host=localhost;'.'dbname=db_ferreteria;charset=utf8', 'root', '');
    }

    public function getProducts(){
        $query = $this->db->prepare("SELECT * from productos");
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}