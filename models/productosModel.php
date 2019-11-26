<?php
    class ProductosModel {
        
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
            $this->tabla="productos";
        }

        public function getProducto($id_producto) {
            $query = $this->db->prepare('SELECT * FROM productos WHERE id_producto = ?');
            $query->execute(array($id_producto));
            $prod = $query->fetch(PDO::FETCH_OBJ);
            return $prod;
        }        

        public function getProductos(){
            $query = $this->db->prepare("SELECT * FROM productos");
            $query->execute();
            $prods = $query->fetchAll(PDO::FETCH_OBJ);
            return $prods;
        }
        
        /*public function getProductosOrdenadosPorCategoria(){
            $query = $this->db->prepare("SELECT productos.*, categorias.id_categoria as Categoria FROM ".$this->tabla." JOIN categorias ON productos.id_categoria = categorias.id_categoria ORDER BY id_categoria ASC");
            $query->execute();
            $productos = $select->fetchAll(PDO::FETCH_OBJ);
            return $productos;
        }*/

        public function insertarProducto($id_categoria,$nombre,$precio,$imagen = null){
            $filepath = null;
            if ($imagen)
                $filepath = $this->moveFile($imagen);  
            $query = $this->db->prepare("INSERT INTO productos (id_categoria, nombre, precio, imagen) VALUES(?,?,?,?)");
            $query->execute(array($id_categoria,$nombre,$precio,$filepath));
        }


        public function borrarProducto($id_producto){
            $query = $this->db->prepare("DELETE FROM productos WHERE id_producto = ?");
            $query->execute(array($id_producto));
        }

        public function editarProducto($id_producto,$id_categoria,$nombre,$precio){
            $query = $this->db->prepare("UPDATE productos SET id_categoria = ?, nombre = ?, precio = ? WHERE id_producto = ?");
            $query->execute(array($id_categoria,$nombre,$precio,$id_producto));
        }


        private function moveFile($imagen) {
            $filepath = "imagenes/productos/" . uniqid() . "." . strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));          //  mueve la imagen y retorna la ubicación
            move_uploaded_file($imagen['tmp_name'], $filepath);
            return $filepath;
        }

        
    }