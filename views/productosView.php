<?php
require_once("libs/Smarty.class.php");

class ProductosView {

    function __construct(){
    }

    public function DisplayProductos($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('productos',$productos);
        $smarty->display('templates/ver_productos.tpl');
    }
}
