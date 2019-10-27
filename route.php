<?php
    require_once('controllers/productosController.php');
    require_once('controllers/categoriasController.php');

    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    
    $productosController = new ProductosController();
    $categoriasController = new CategoriasController();
    
    $url = $_GET['action'];
    $action = explode('/', $url);
    
    if ($action[0]=='productos'){
        $productosController->showProductos();
    }else 
        if($action[0]=='productosordenados'){
            $productosController->showProductosOrdenados();
    }else        
        if($action[0]=='categorias'){
            $categoriasController->showCategorias();        
    }else        
        if($action[0]=='insertar'){
            $productosController->addProducto();
    }else        
        if($action[0]=='borrar'){
            $productosController->deleteProducto($url[1]);         
    }else        
    if($action[0]=='editar'){
        $productosController->editProducto();         
}

