<?php

    class CategoriasModel{

        private $db;
        //CREO LA CONEXIÓN CON LA BASE DE DATOS
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ferre;charset=utf8', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        //BUSCO TODAS LAS CATEGORIAS
        function GetCategorias(){
            $sentencia = $this->db->prepare("SELECT * FROM categoria");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        //BUSCO UNA CATEGORIA POR ID
        function GetCategoriaById($categoria_id){
            $sentencia = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria=?");
            $sentencia->execute(array($categoria_id));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        //INSERTA UNA CATEGORIA
        function InsertCategoria($id_categoria,$categoria){
            $sentencia = $this->db->prepare("INSERT INTO categoria(id_categoria,categoria) VALUES(?,?)");
            $sentencia->execute(array($id_categoria,$categoria));
        }
        //ELIMINO UNA CATEGORIA
        function DeleteCategoria($categoria_id){
            $sentencia = $this->db->prepare("DELETE FROM categoria WHERE id_categoria=?");
            $sentencia->execute(array($categoria_id));
        }
        //ACTUALIZA DATOS DE UNA CATEGORIA
        function UpdateCategoria($categoria,$categoria_id){
            $sentencia = $this->db->prepare("UPDATE categoria SET categoria=? WHERE categoria.id_categoria=?");
            $sentencia->execute(array($categoria,$categoria_id));
        }
    }
?>