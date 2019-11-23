<?php
require_once("libs/Smarty.class.php");

class IndexView {

    function __construct(){
        $smarty = new Smarty();
    }

    public function displayIndex(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"db_estudiodg");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/ver_index.tpl');
    }

}