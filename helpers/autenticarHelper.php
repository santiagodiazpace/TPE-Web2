<?php
class AutenticarHelper {
	
    public function __construct() {}
        
	public function login($user){
		session_start();
		$_SESSION['userId'] = $user->id_usuario;
        $_SESSION['usuario'] = $user->email;
        $_SESSION['USERNAME'] = $user->nombre;           
        $_SESSION['USER_TYPE'] = $user->autorizado;
    }
    
	public function logout(){
		session_start();
		session_destroy();
    }
    
	public function checkLogin(){   
        session_start();
        if(!isset($_SESSION['userId'])){
            header("Location: " . URL_LOGIN);
            die();
        }
        if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
            header("Location: " . URL_LOGOUT);
            die();
        } 
        $_SESSION['LAST_ACTIVITY'] = time();
    }

    public function getLoggedUser() {
        if (! isset($_SESSION['USERNAME'])) {
           return null;
        }
        else{
            return $_SESSION;
        }
    }


    /*public function getUsuarioLogueado() {
		if (session_status() != PHP_SESSION_ACTIVE)
		    session_start();
        return $_SESSION['usuario'];
	}*/
}