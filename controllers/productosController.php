<?php
    require_once('./views/productosView.php');
    require_once('./models/productosModel.php');
    
    class ProductosController{
        private $viewProductos;
        private $modelProductos;
        
        public function __construct(){
            $this->viewProductos = new ProductosView;
            $this->modelproductos = new ProductosModel;
        }
        public function showProductos(){
            $prods = $this->modelProductos->getProductos();
            $this->viewProductos->displayProductos($prods);
        }
    }