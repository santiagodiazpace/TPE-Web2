<?php
    class ProductosModel{
        
        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
        }

        public function getProductos(){
            $query = $this->db->prepare("SELECT * FROM productos");
            $query->execute();
            $prods = $query->fetchAll(PDO::FETCH_OBJ);
            return $prods;
        }

        public function getProductosOrdenados(){
            $query = $this->db->prepare("SELECT * from productos ORDER BY nombre ASC");
            $query->execute();
            $prods = $query->fetchAll(PDO::FETCH_OBJ);
            return $prods;
        }
        
        public function getCategoria($id_categoria){
            $query = $this->db->prepare("SELECT * FROM productos WHERE id_categoria = ? ORDER BY nombre ASC");
            $query->execute(array($id_producto));
            $prods = $query->fetch(PDO::FETCH_OBJ);   // VA FETCHALL  ??????
            return $prods;
        }
        
        public function getFilms($id, $tipo){
            if ($tipo)
                {$sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? AND f.tipo = ? ORDER BY nombre ASC");
                $sentencia->execute(array($id, $tipo));
            }else{
                $sentencia = $this->db->prepare("SELECT * from film AS f JOIN categorias AS c ON c.genero = f.genero WHERE c.id = ? ORDER BY nombre ASC");
                $sentencia->execute(array($id));
            }
            $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
            return $categoria;
        }


        public function insertarProducto($id_categoria,$nombre,$precio){
            $query = $this->db->prepare("INSERT INTO productos (id_categoria, nombre, precio) VALUES(?,?,?)");
            $query->execute(array($id_categoria,$nombre,$precio));
        }


        public function borrarProducto($id_producto){
            $query = $this->db->prepare("DELETE FROM productos WHERE id_producto=?");
            $query->execute(array($id_producto));
        }
        
    }