<?php
class CategoriasModel{
    public function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=db_ferreteria;charset=utf8','root','');
    }

    public function getAllCategorias(){
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        return $categorias;
    }
}