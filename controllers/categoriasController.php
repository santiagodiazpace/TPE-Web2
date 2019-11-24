<?php
    require_once('./models/categoriasModel.php');
    require_once('./views/categoriasView.php');
    require_once("./helpers/autenticar.helper.php");

    class CategoriasController {
        
        private $viewCategorias;
        private $modelCategorias;
        
        public function __construct(){
            $this->viewCategorias = new CategoriasView;
            $this->modelCategorias = new CategoriasModel;
            $this->autHelper = new AutenticarHelper;
        }

        public function showCategorias(){
            $categ = $this->modelCategorias->getCategorias();
            $this->viewCategorias->displayCategorias($categ);
        }

        public function showCategoriasAdmin(){
            $categ = $this->modelCategorias->getCategorias();
            $this->viewCategorias->displayCategoriasAdmin($categ);
        }

        public function showDetalleCategoria($id_categoria){
            $cat = $this->modelCategorias->getCategoria($id_categoria);
            $this->viewCategorias->displayDetalleCategoria($cat);
        }

        public function editCategoria($id_categoria){
            $this->autHelper->checkLogin();
            $this->modelCategorias->editCategoria($id_categoria,$_POST['nombre']);
            header("Location: " . URL_CATEGORIAS_ADMIN);
        }

        public function showEditarCategoria($id_categoria){
            $this->autHelper->checkLogin();
            $cat = $this->modelCategorias->getCategoria($id_categoria);
            $this->viewCategorias->displayEditarCategoria($cat);
        }

        public function addCategoria(){
            $this->autHelper->checkLogin();
            $this->modelCategorias->insertarCategoria($_POST['nombre']);
            header("Location: " . URL_CATEGORIAS_ADMIN);
        }

        public function deleteCategoria($id_categoria){
            $this->autHelper->checkLogin();           
            $this->modelCategorias->borrarCategoria($id_categoria);
            header("Location: " . URL_CATEGORIAS_ADMIN);
         }

    }