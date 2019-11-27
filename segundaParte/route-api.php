<?php
    require_once('api/comentario.api.controller.php');
    require_once('Router.php');

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", BASE_URL . 'login');

   // crea el router
    $router = new Router();

    // define la tabla de ruteo
    $router->addRoute('comentarios/:ID', 'GET',     'ComentarioApiController', 'getComentario');
    $router->addRoute('comentarios',     'GET',     'ComentarioApiController', 'getComentarios');
    $router->addRoute('comentarios/:ID', 'DELETE',  'ComentarioApiController', 'deleteComentario');
    $router->addRoute('comentarios',     'POST',    'ComentarioApiController', 'crearComentario');

    // rutea
    $router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
