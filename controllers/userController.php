<?php
    require_once ("./views/userView.php");
    require_once ("./models/userModel.php");

    class UserController{
        private $viewUser;
        private $modelUser;
        public function __construct(){
            $this->viewUser = new UserView;
            $this->modelUser = new UserModel;
        }
        public function displaySignUp(){
            $this->viewUser->displaySignUp();
        }
        public function registerUser(){
            $name = $_POST['nombre'];
            $mail = $_POST['email'];
            $password = $_POST['clave'];
            $users = $this->modelUser->getUsers();
            if ((isset($users))&&($users!=null)){
                foreach ($users as $user) {
                    if ($mail==$user->email){
                        $this->viewUser->repeatedMail();
                    }
                }
            }
            $this->modelUser->insertUser($name, $mail, $password);
            $this->viewUser->successfulRegistration();
        }
        public function login(){
            $mail = $_POST['email'];
            $password = $_POST['clave'];
            $hash = $this->modelUser->getPassword($mail);
            var_dump($hash);
            if (isset($hash)&&($hash!=null)&&(password_verify($password, $hash[0]->clave))){
                session_start();
                $_SESSION['user'] = $mail;
                header("Location: ". BASE_REGISTRO_OK);
            }else{
                header("Location: ". BASE_URL);
            }
        }
        public function logout(){
            session_start();
            session_destroy();
            header("Location: ". BASE_URL);
        }
        public function displayLogIn(){
            $this->viewUser->displayLogin();
        }
    }


