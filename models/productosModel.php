<?php
    class ProductosModel {
        
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
            $this->tabla="productos";
        }

        public function getProducto($id_producto) {
            $query = $this->db->prepare('SELECT * FROM productos WHERE id_producto = ?');
            $query->execute(array($id));
            $prod = $query->fetch(PDO::FETCH_OBJ);
            return $prod;
        }        

        public function getProductos(){
            $query = $this->db->prepare("SELECT * FROM productos");
            $query->execute();
            $prods = $query->fetchAll(PDO::FETCH_OBJ);
            return $prods;
        }
        
        public function getProductosOrdenadosPorCategoria(){
            $select = $this->db->prepare("SELECT productos.*, categorias.id_categoria as Categoria FROM ".$this->tabla." JOIN categorias ON productos.id_categoria = categorias.id_categoria ORDER BY id_categoria ASC");
            $select->execute();
            $productos = $select->fetchAll(PDO::FETCH_OBJ);
            return $productos;
        }

        public function insertarProducto($id_categoria,$nombre,$precio){
            $query = $this->db->prepare("INSERT INTO productos (id_categoria, nombre, precio) VALUES(?,?,?)");
            $query->execute(array($id_categoria,$nombre,$precio));
        }


        public function borrarProducto($id_producto){
            $query = $this->db->prepare("DELETE FROM productos WHERE id_producto = ?");
            $query->execute(array($id_producto));
        }

        public function editarProducto($id_producto,$id_categoria,$nombre,$precio){
            $query = $this->db->prepare("UPDATE productos SET id_categoria = ?, nombre = ?, precio = ?, WHERE id_producto = ?");
            $query->execute(array($id_producto,$id_categoria,$nombre,$precio));
        }
    }