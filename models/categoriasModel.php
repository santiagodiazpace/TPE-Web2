<?php
    class CategoriasModel{

        private $db;
        
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
        }
        
        public function getCategorias(){
            $query = $this->db->prepare("SELECT * FROM categorias");
            $query->execute();
            $categs = $query->fetchAll(PDO::FETCH_OBJ);
            return $categs;
        }

        public function getCategoriaOrdenada($categoria){
            $query = $this->db->prepare("SELECT * FROM productos WHERE id_categoria = ? ORDER BY nombre ASC");
            $query->execute(array($id_categoria));
            $film = $sentencia->fetch(PDO::FETCH_OBJ);
            return $film;
        }

        public function insertarCategoria($nombre){
            $query = $this->db->prepare("INSERT INTO categorias (nombre) VALUES(?)");
            $query->execute(array($nombre));
        }
    
        public function borrarCategoria($id_categoria){
            $query = $this->db->prepare("DELETE FROM categorias WHERE id_categoria=?");
            $query->execute(array($id_categoria));
        }

        public function modificarCategoria($id_categoria,$nombre){
            $query = $this->db->prepare("UPDATE categorias SET nombre=? WHERE id_categoria=?");
            $query = execute(array($id_categoria,$nombre));
        }
    }