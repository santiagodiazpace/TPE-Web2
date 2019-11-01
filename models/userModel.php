<?php
    class UserModel{

        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
        }

        public function getClave($usuario){
            $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
            $query->execute(array($usuario));
            $clave = $query->fetch(PDO::FETCH_OBJ);          
            return $clave;
        }

        public function setUsuario($usuario, $clave, $nombre){
            $query = $this->db->prepare("INSERT INTO usuarios(email, clave, nombre) VALUES(?,?,?)");
            $query->execute(array($usuario,$clave,$nombre));
        }
        
    }