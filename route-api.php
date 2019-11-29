<?php

require_once("Router.php");
require_once("./api/comentariosApiController.php");

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

// recurso solicitado
$resource = $_GET["resource"];

// método utilizado
$method = $_SERVER["REQUEST_METHOD"];

// instancia el router
$router = new Router();

// arma la tabla de ruteo
$router->addRoute("comentarios", "GET", "comentariosApiController", "getComentarios");
$router->addRoute("comentarios/:ID", "GET", "comentariosApiController", "getComentario");
$router->addRoute("comentarios/:ID", "DELETE", "comentariosApiController", "deleteComentario");
$router->addRoute("comentarios", "POST", "comentariosApiController", "addComentario");
$router->addRoute("productos/:ID/promedio", "GET", "comentariosApiController", "getPromedio");

// rutea
$router->route($resource, $method);
