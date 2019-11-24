<?php

abstract class ApiController {
    protected $model;
    protected $view;
    private $data; 

    public function __construct() {
        $this->view = new JSONview();
        $this->data = file_get_contents("php://input"); 
        $this->model = new ComentariosModel();
    }

    function getData(){ 
        return json_decode($this->data); 
    }  

}
