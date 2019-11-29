<?php
    class ComentariosModel {

        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
            $this->tabla="comentarios";
        }

        public function getModelComentarios(){
            $query = $this->db->prepare( "SELECT * from comentarios");
            $query->execute();
            $comentarios = $query->fetchAll(PDO::FETCH_OBJ);           
            return $comentarios;
        }

        public function getModelComentario($id_comentario){
            $query = $this->db->prepare( "SELECT * from comentarios where id_comentario = ?");
            $query->execute([$id_comentario]);
            $comentario = $query->fetch(PDO::FETCH_OBJ);            
            return $comentario;
        }
    
        public function borrarComentario($id_comentario){
            $query = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
            $query->execute(array($id_comentario));  
        }

        public function insertarComentario($id_producto, $descripcion, $puntos, $nombre_usuario){
            $query = $this->db->prepare("INSERT INTO comentarios(id_producto, descripcion, puntos, nombre_usuario) VALUES(?,?,?,?)");
            $query->execute(array($id_producto, $descripcion, $puntos, $nombre_usuario));
        }
    }

    
