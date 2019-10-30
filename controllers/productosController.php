<?php
    require_once('./views/productosView.php');
    require_once('./models/productosModel.php');
    
    class ProductosController {

        private $viewProductos;
        private $modelProductos;
        
        public function __construct(){
            $this->viewProductos = new ProductosView;
            $this->modelProductos = new ProductosModel;
        }
        public function showProductos(){
            $prods = $this->modelProductos->getProductos();
            $this->viewProductos->displayProductos($prods);
        }

        public function showDetalleProducto($id_producto){
            $prod = $this->modelProductos->getProducto($id_producto);
            $this->viewProductos->displayDetalleProducto($prod);
        }

        public function editProducto($id_producto){
            $this->modelProductos->editarProducto($id_producto,$_POST['id_categoria'],$_POST['nombre'],$_POST['precio']);
            $this->viewProductos->displayEditarProducto($id_producto);
        }

        public function showProductosOrdenados(){
            $prods = $this->modelProductos->getProductosOrdenadosPorCategoria();
            $this->viewProductos->displayProductos($prods);
        }

        public function addProducto(){
            $this->modelProductos->insertarProducto($_POST['id_categoria'],$_POST['nombre'],$_POST['precio']);
            header("Location: " . BASE_URL);
        }

        public function deleteProducto($id_producto){
            $this->modelProductos->borrarProducto($id_producto);
            header("Location: " . BASE_URL);
         }

    }