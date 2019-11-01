<?php
    require_once('./views/productosView.php');
    require_once('./models/productosModel.php');
    require_once("./models/categoriasModel.php");
    require_once("./helpers/autenticar.helper.php");

    
    class ProductosController {

        private $viewProductos;
        private $modelProductos;
        private $modelCategorias;
        
        public function __construct(){
            $this->viewProductos = new ProductosView;
            $this->modelProductos = new ProductosModel;
            $this->modelCategorias = new CategoriasModel;
            $this->autHelper = new AutenticarHelper;
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
            $this->autHelper->checkLogin();
            $this->modelProductos->editarProducto($id_producto,$_POST['id_categoria'],$_POST['nombre'],$_POST['precio']);
            header("Location: " . BASE_URL);
        }

        public function showEditarProducto($id_producto){
            $this->autHelper->checkLogin();
            $prod = $this->modelProductos->getProducto($id_producto);
            $categ = $this->modelCategorias->getCategorias();
            $this->viewProductos->displayEditarProducto($prod,$categ);
        }

        public function showProductosOrdenados(){
            $prods = $this->modelProductos->getProductosOrdenadosPorCategoria();
            $this->viewProductos->displayProductos($prods);
        }

        public function addProducto(){
            $this->autHelper->checkLogin();
            $this->modelProductos->insertarProducto($_POST['id_categoria'],$_POST['nombre'],$_POST['precio']);
            header("Location: " . BASE_URL);
        }

        public function deleteProducto($id_producto){
            $this->autHelper->checkLogin();           
            $this->modelProductos->borrarProducto($id_producto);
            header("Location: " . BASE_URL);
         }

    }