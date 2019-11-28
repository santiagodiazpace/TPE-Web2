<?php
require_once("./models/comentariosModel.php");
require_once("./api/apiController.php");
require_once("./api/JSONview.php");

class ComentariosApiController extends ApiController{
  
    public function getComentario($params = null) {
        // obtiene el parametro de la ruta
        $id = $params[':ID'];   
        $comentario = $this->model->getModelComentario($id);
        if ($comentario) {
            $this->view->response($comentario, 200);   
        } else {
            $this->view->response("No existe el comentario con el id={$id}", 404);
        }
    }

    public function getComentarios($params = null) {
        $comentarios = $this->model->getModelComentarios();
        $this->view->response($comentarios, 200);
    }

    public function deleteComentario($params = []) {
        $comentario_id = $params[':ID'];
        $comentario = $this->model->getModelComentario($comentario_id);
        if ($comentario) {
            $this->model->borrarComentario($comentario_id);
            $this->view->response("Comentario id= $comentario_id eliminado con éxito", 200);
        }
        else 
            $this->view->response("Comentario id= $comentario_id not found", 404);
    }

   public function addComentario($params = []) { 
        // la obtengo del body
        $comentario = $this->getData(); 
        // inserta el comentario
        $comentarioId = $this->model->insertarComentario($comentario->id_producto, $comentario->descripcion, $comentario->puntos, $comentario->nombre_usuario);  
        // obtengo el recien creado
        $comentarioNuevo = $this->model->getModelComentario($comentarioId);        
        if ($comentarioNuevo)
            $this->view->response($comentarioNuevo, 200);
        else
            $this->view->response("Error al insertar comentario", 500);
    }


}
