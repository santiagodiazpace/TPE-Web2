<?php
    require_once('./views/indexView.php');
    require_once('./models/userModel.php');    
    require_once("./helpers/autenticarHelper.php");

    class IndexController {

        private $viewIndex;

        public function __construct(){
            $this->viewIndex = new IndexView;
            $this->autHelper = new AutenticarHelper;
        }

        public function showIndex(){
            $this->viewIndex->displayIndex();
        }

    }