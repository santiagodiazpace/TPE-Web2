<?php
require_once("./Models/ComentariosModel.php");
require_once("./api/apiController.php");
require_once("./api/JSONview.php");

class ComentariosApiController extends ApiController{
  
    public function getComentarios($params = null) {
        $comentarios = $this->model->getComentarios();
        $this->view->response($comentarios, 200);
    }

    /**
     * Obtiene una tarea dado un ID
     * 
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function getComentario($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];      
        $comentario = $this->model->getComentario($id);       
        if ($comentario) {
            $this->view->response($comentario, 200);   
        } else {
            $this->view->response("No existe el comentario con el id={$id}", 404);
        }
    }

    // ComentariosApiController.php
    public function deleteComentario($params = []) {
        $comentario_id = $params[':ID'];
        $comentario = $this->model->getComentario($task_id);

        if ($comentario) {
            $this->model->borrarComentario($comentario_id);
            $this->view->response("Comentario id=$comentario_id eliminado con éxito", 200);
        }
        else 
            $this->view->response("Comentario id=$comentario_id not found", 404);
    }

    // ComentariosApiController.php
   public function addComentario($params = []) {     
        $comentario = $this->getData(); // la obtengo del body

        // inserta el comentario
        $comentarioId = $this->model->insertarComentario($comentario->titulo, $tarea->descripcion,$tarea->prioridad, 0);   // VER  !!!!!

        // obtengo el recien creado
        $comentarioNuevo = $this->model->getComentario($comentarioId);        
        if ($comentarioNuevo)
            $this->view->response($comentarioNuevo, 200);
        else
            $this->view->response("Error al insertar comentario", 500);
    }

    // ComentariosApiController.php 
    public function updateComentario($params = []) {                                 // VER  !!!!!
        $comentario_id = $params[':ID'];
        $comentario = $this->model->getComentario($comentario_id);
        if ($comentario) {
            $body = $this->getData();
            $titulo = $body->titulo;
            $descripcion = $body->descripcion;
            $prioridad = $body->prioridad;
            $comentario = $this->model->actualizarComentario($task_id, $titulo, $descripcion, $prioridad);
            $this->view->response("Comentario id=$comentario_id actualizado con éxito", 200);
        }
        else 
            $this->view->response("Comentario id=$comentario_id not found", 404);
    }


}
