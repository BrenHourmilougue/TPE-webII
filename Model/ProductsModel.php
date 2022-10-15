<?php

    class ProductsModel{

        private $db;
        //CREO LA CONEXIÓN CON LA BASE DE DATOS
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_ferre;charset=utf8', 'root', '');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
        //BUSCO TODOS LOS PRODUCTOS
        function GetProducts(){
            $sentencia = $this->db->prepare("SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria ORDER BY producto.id");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        //BUSCO UN SOLO PRODUCTO POR ID
        function GetProductById($product_id){
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id=?");
            $sentencia->execute(array($product_id));
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        //INSERTO UN PRODUCTO
        function InsertProduct($id,$nombre,$precio,$stock,$descripcion,$id_categoria,$marca){
            $sentencia = $this->db->prepare("INSERT INTO producto(id, nombre, precio, stock, descripcion, id_categoria, marca) VALUES(?,?,?,?,?,?,?)");
            $sentencia->execute(array($id,$nombre,$precio,$stock,$descripcion,$id_categoria,$marc));
            return $this->db->lastInsertId();
        }
        //ELIMINO UN PRODUCTO
        function DeleteProduct($product_id){
            $sentencia = $this->db->prepare("DELETE FROM producto WHERE id=?");
            $sentencia->execute(array($product_id));
        }
        //ACTUALIZA DATOS DE UN PRODUCTO
        function UpdateProduct($product,$price,$stock,$description,$categoria,$marca,$product_id){
            $sentencia = $this->db->prepare("UPDATE producto SET nombre=?, precio=?, stock=?, descripcion=?, marca=?, id_categoria=? WHERE producto.id=?");
            $sentencia->execute(array($product,$price,$stock,$description,$categoria,$marca,$product_id));
        }
        //BUSCO LOS PRODUCTOS QUE COICIDAN CON EL ID DEL FILTRO POR CATEGORIA
        function GetProductsByCategoria($categoria_id){
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_categoria=?");
            $sentencia->execute(array($categoria_id));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        //BUSCA PRODUCTOS CON UN LIMITE DESDE QUE PRODUCTO Y CUANTOS RESULTADOS
        function GetProductsByLimit($desde, $productoPorPagina){
            $sentencia = $this->db->prepare("SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria LIMIT $desde,$productoPorPagina");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);//
        }
        //BUSCO ITEMS SEGÚN UN NOMBRE
        function SearchItemByName($search){
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE nombre LIKE '%' ? '%' ");
            $sentencia->execute(array($search));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        //BUSCO ITEMS SEGÚN UN PRECIO
        function SearchItemByPrice($precioMinimo, $precioMaximo){
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE precio BETWEEN ? AND ?");
            $sentencia->execute(array($precioMinimo, $precioMaximo));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        //BUSCO ITEMS SEGÚN UN NOMBRE Y UN PRECIO
        function SearchItem($name, $precioMinimo, $precioMaximo){
            $sentencia = $this->db->prepare("SELECT * FROM producto WHERE nombre LIKE '%' ? '%' AND precio BETWEEN ? AND ?");
            $sentencia->execute(array($name, $precioMinimo, $precioMaximo));
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>