<?php
    class UserModel{

        private $db;
        
        public function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_estudiodg;charset=utf8', 'root', '');
        }

        public function insertUser($nombre, $email, $clave){
            $hash = password_hash($clave, PASSWORD_DEFAULT);
            $query = $this->db->prepare('INSERT INTO usuarios(nombre, email, clave) VALUES (?,?,?)');
            $query->execute(array($nombre, $email, $hash));
        }

        public function getUsuarios(){
            $query = $this->db->prepare('SELECT * FROM usuarios');
            $query->execute();
            $users = $query->fetchALL(PDO::FETCH_OBJ);
            return $users;
        }

        public function GetClave($email){
            $query = $this->db->prepare( "SELECT * FROM usuarios WHERE email = ?");
            $query->execute(array($email));
            $clave = $query->fetch(PDO::FETCH_OBJ);     
            return $clave;
        }
    
    }