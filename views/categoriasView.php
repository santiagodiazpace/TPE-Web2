<?php
require_once("libs/Smarty.class.php");

class CategoriasView {

    function __construct(){
    }

    public function displayCategorias($categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('categorias',$categorias);
        $smarty->display('templates/ver_categorias.tpl');             
    }

    public function displayCategoriasAdmin($categorias){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->assign('categorias',$categorias);
        $smarty->display('templates/ver_categorias_admin.tpl');
    }                  

    public function displayEditarCategoria($categoria){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Editar Categoria");
        $smarty->assign('categoria',$categoria);
        $smarty->display('templates/editar_categoria.tpl');
    }

}
