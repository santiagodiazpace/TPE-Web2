<?php

require_once "Controllers/categoriasController.php";
require_once "Controllers/productosController.php";
require_once "Controllers/userController.php";

$action = $_GET["action"];
define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

define("URL_TAREAS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/tareas');
define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

$controller = new TareasController();

if($action == ''){
    $controller->GetTareas();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if($partesURL[0] == "tareas"){
            $controller->GetTareas();
        }elseif($partesURL[0] == "insertar") {
            $controller->InsertarTarea();
        }elseif($partesURL[0] == "finalizar") {
            $controller->FinalizarTarea($partesURL[1]);
        }elseif($partesURL[0] == "borrar") {
            $controller->BorrarTarea($partesURL[1]);
        }elseif($partesURL[0] == "login") {
            $controllerUser = new UserController();
            $controllerUser->Login();
        }elseif($partesURL[0] == "iniciarSesion") {
            $controllerUser = new UserController();
            $controllerUser->IniciarSesion();
        }elseif($partesURL[0] == "logout") {
            $controllerUser = new UserController();
            $controllerUser->Logout();
        }
    }
}
