<?php
    class ComentariosModel {

        private $db;

        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
            $this->tabla="comentarios";
        }


        public function getComentario($id_comentario){

        }

        public function getComentarios(){

        }

        public function borrarComentario($id_comentario){

        }

        public function insertarComentario($id_producto, $fecha, $descripcion, $puntos){

        }

        public function actualizarComentario($id_producto, $fecha, $descripcion, $puntos){

        }

