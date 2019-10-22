<?php
require_once("libs/Smarty.class.php");

class CategoriasView {

    function __construct(){
    }

    public function DisplayCategorias($categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('categorias',$categorias);
        $smarty->display('templates/ver_categorias.tpl');
    }
}
