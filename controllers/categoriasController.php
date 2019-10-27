<?php
    require_once('./models/categoriasModel.php');
    require_once('./views/categoriasView.php');

    class CategoriasController {
        
        private $viewCategorias;
        private $modelCategorias;
        
        public function __construct(){
            $this->viewCategorias = new CategoriasView;
            $this->modelCategorias = new CategoriasModel;
        }
        public function showCategorias(){
            $categ = $this->modelCategorias->getCategorias();
            $this->viewCategorias->displayCategorias($categ);
        }
    }