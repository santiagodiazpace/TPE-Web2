<?php
    require_once ("./views/userView.php");
    require_once ("./models/userModel.php");
    require_once "./helpers/autenticar.helper.php";

    class UserController{

        private $viewUser;
        private $modelUser;
        private $autHelper;

        public function __construct(){
            $this->viewUser = new UserView;
            $this->modelUser = new UserModel;
            $this->autHelper = new AutenticarHelper;
        }

        public function showLogin(){
        $this->viewUser->DisplayLogin();
        }

        public function showLogout(){
            session_start();
            session_destroy();
            header("Location: " . URL_LOGIN);
        }

        public function iniciarSesion(){
            $password = $_POST['password'];
            $usuario = $this->modelUser->getClave($_POST['usuario']);
            if (!empty($usuario) && password_verify($password, $usuario->clave)){
                $this->autHelper->login($usuario);
                header("Location: " . URL_PRODUCTOS);
            } else {
                $this->viewUser->displayLogin("Error de Sesión");
            }
        }
               
        public function showRegistro(){
            $this->viewUser->displayRegistro();
        }
        
        public function registro(){
            $clave = $_POST['clave'];
            $usuario = $_POST['usuario'];
            $hash = password_hash($clave, PASSWORD_DEFAULT);
            $this->modelUser->setUser($usuario, $hash);
            header("Location: " . URL_LOGIN);    
        }
}


