<?php
    require_once('controllers/productosController.php');
    require_once('controllers/categoriasController.php');
    require_once('controllers/userController.php');
    require_once('controllers/indexController.php');


    $action = $_GET["action"];

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("URL_PRODUCTOS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productos');
    define("URL_PRODUCTOS_ADMIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/productosadmin');
    define("URL_CATEGORIAS", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/categorias');
    define("URL_LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("URL_LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    define("URL_REGISTRO", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/registrar');

    $productosController = new ProductosController();
    $categoriasController = new CategoriasController();
    $userController = new userController();
    $indexController = new indexController();

    if($action == ''){
        //$productosController->showProductos();
        $indexController->showIndex();
    }
    else{
        if (isset($action)){
            $partesURL = explode("/", $action);

            if($partesURL[0] == "productosadmin"){                                                                  // PRODUCTOS ADMIN
                if ((isset($partesURL[1]))&&($partesURL[1] == "insertar")){
                    $productosController->addProducto();
                }  
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "borrar")){
                    $productosController->deleteProducto($partesURL[2]);
                }
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "editar")){
                    $productosController->editProducto($partesURL[2]);
                }
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "formularioeditar")){
                    $productosController->showEditarProducto($partesURL[2]);
                }
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "detalle")){
                    $productosController->showDetalleProductoAdmin($partesURL[2]);
                }
                else{
                    $productosController->showProductosAdmin();
                }
            } 

            if($partesURL[0] == "productos"){                                                                         // PRODUCTOS
                if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "detalle")){
                    $productosController->showDetalleProducto($partesURL[2]);
                }
                else{
                    $productosController->showProductos();
                }          
            }

            if($partesURL[0] == "categorias") {                                                                    // CATEGORIAS
                if ((isset($partesURL[1]))&&($partesURL[1] == "insertar")){
                    $categoriasController->addCategoria();
                }  
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "borrar")){
                    $categoriasController->deleteCategoria($partesURL[2]);
                }
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "editar")){
                    $categoriasController->editCategoria($partesURL[2]);
                }
                else if ((isset($partesURL[1]))&&(isset($partesURL[2]))&&($partesURL[1] == "formularioeditarcategoria")){
                    $categoriasController->showEditarCategoria($partesURL[2]);
                }
                else{
                    $categoriasController->showCategorias();
                }
            }

            else if($partesURL[0] == "login") {                                                                        // USUARIOS
                $userController->showLogin();
            }
            else if($partesURL[0] == "iniciarsesion") {
                $userController->iniciarSesion();
            }
            else if($partesURL[0] == "logout") {
                $userController->showLogout();
            }
            else if($partesURL[0] == "registrar") {
                $userController->showRegistro();
            }
            else if($partesURL[0] == "usuarionuevo") {
                $userController->registro();
            }
        }
    }

