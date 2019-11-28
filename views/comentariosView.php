<?php

require_once('libs/Smarty.class.php');


class ComentariosView {

    function __construct(){
    }


    public function DisplayComentariosCSR(){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Comentarios");
        $smarty->assign('BASE_URL',BASE_URL);
        $smarty->display('templates/ver_comentarios_csr.tpl');
    }
}
