<?php

class ProductsModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ferreteria;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de productos completa.
     */
    public function getAllProducts() {
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();

        // 3. obtengo los resultados
        $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $products;
    }

    /*
    public function insertProduct($title, $description, $priority) {
        $query = $this->db->prepare("INSERT INTO product (titulo, descripcion, prioridad, finalizada) VALUES (?, ?, ?, ?)");
        $query->execute([$title, $description, $priority, false]);

        return $this->db->lastInsertId();
    }
 */

    /**
     * Elimina un producto dado su id.
     */
    function deleteProductById($id) {
        $query = $this->db->prepare('DELETE FROM productos WHERE id = ?');
        $query->execute([$id]);
    }


}
