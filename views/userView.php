
<?php
    require_once("./libs/Smarty.class.php");

    class UserView{

        public function registroExitoso(){
            $smarty = new Smarty();
            $smarty->assign('titulo',"registro ok");
            $smarty->assign('BASE_REGISTRO_OK',$BASE_REGISTRO_OK);
            $smarty->display('./templates/registro_exitoso.tpl');
        }

        public function displayRegistro(){
            $smarty = new Smarty();
            $smarty->assign('titulo',"registro");
            $smarty->display('./templates/registro.tpl');
        }

        public function displayLogin(){
            $smarty = new Smarty();
            $smarty->assign('titulo',"login");
            $smarty->display('./templates/login.tpl');
        }
    }