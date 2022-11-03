<?php

class ProductsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ferreteria;charset=utf8', 'root', '');
    }

    
    public function getAllProducts() {
        
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $products;
    }

    
    public function insertProduct($codigo, $nombre, $marca, $categoria, $stock, $precio) {
        $query = $this->db->prepare("INSERT INTO product (codigo, nombre, marca, categoria, Stock, Precio) VALUES (?, ?, ?, ?,?,?)");
        $query->execute([$codigo, $nombre, $marca, $categoria, $stock, $precio]);

        return $this->db->lastInsertId();
    }
 

    function deleteProductById($id) {
        $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute([$id]);
    }


}
