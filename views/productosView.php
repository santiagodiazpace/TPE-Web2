<?php
require_once("libs/Smarty.class.php");

class ProductosView {

    function __construct(){
    }

    public function displayProductos($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('productos',$productos);
        $smarty->display('templates/ver_productos.tpl');
    }

    public function displayEditarProducto($producto){
        $smarty = new Smarty();        
        $smarty->assign('titulo',"Editar producto");
        $smarty->assign('producto',$producto);
        $smarty->display('templates/editar_producto.tpl');
    }

    public function displayDetalleProducto($producto){
        $smarty = new Smarty();        
        $smarty->assign('titulo',"Detalle producto");
        $smarty->assign('producto',$producto);
        $smarty->display('templates/detalle_producto.tpl');
    }
}
