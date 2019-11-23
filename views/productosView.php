<?php
require_once("libs/Smarty.class.php");

class ProductosView {

    function __construct(){
        $smarty = new Smarty();
        $autHelper = new AutenticarHelper();
        //$userName = $autHelper->getUsuarioLogueado();
        //$smarty->assign('BASE_URL',BASE_URL);
        //$smarty->assign('userName', $userName);
    }

    public function displayProductos($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('productos',$productos);
        $smarty->display('templates/ver_productos.tpl');                     
    }

    public function displayProductosAdmin($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('productos',$productos);
        $smarty->display('templates/ver_productos_admin.tpl');                     
    }

    public function displayEditarProducto($producto,$categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Editar Producto");
        $smarty->assign('lista_categorias',$categorias);
        $smarty->assign('producto',$producto);
        $smarty->display('templates/editar_producto.tpl');
    }

    public function displayDetalleProducto($producto){
        $smarty = new Smarty();        
        $smarty->assign('titulo',"Detalle producto");
        $smarty->assign('producto',$producto);
        $smarty->display('templates/detalle_producto.tpl');
    }

    public function displayDetalleProductoAdmin($producto){
        $smarty = new Smarty();        
        $smarty->assign('titulo',"Detalle producto");
        $smarty->assign('producto',$producto);
        $smarty->display('templates/detalle_producto_admin.tpl');
    }
    
}
