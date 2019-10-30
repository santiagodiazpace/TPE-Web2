<?php
    require_once('controllers/productosController.php');
    require_once('controllers/categoriasController.php');
    require_once('controllers/userController.php');

    $action = $_GET["action"];

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("URL_PRODUCTOS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productos');
    define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');


    $productosController = new ProductosController();
    $categoriasController = new CategoriasController();
    $userController = new userController();

    if($action == ''){
        $productosController->showProductos();
    }
    else{
        if (isset($action)){
            $partesURL = explode("/", $action);
            if($partesURL[0] == "productos"){
                if ((isset($partesURL[1]))&&($partesURL[1] == "insertar")){
                    $productosController->addProducto();
                }  
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "borrar")){
                    $productosController->deleteProducto($partesURL[2]);
                }
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "editar")){
                    $productosController->editProducto($partesURL[2]);
                }
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "detalle")){
                    $productosController->showDetalleProducto($partesURL[2]);
                }
                else{
                    $productosController->showProductos();
                }
            }
            else if($partesURL[0] == "categorias") {
                $categoriasController->showCategorias();
            }
            else if($partesURL[0] == "login") {
                $userController->showLogin();
            }
            else if($partesURL[0] == "iniciarSesion") {
                $userController->iniciarSesion();
            }
            else if($partesURL[0] == "logout") {
                $userController->showLogout();
            }
            else if($partesURL[0] == "registrar") {
                $userController->showRegister();
            }
            else if($partesURL[0] == "usuarioNuevo") {
                $userController->register();
            }
        }
    }

