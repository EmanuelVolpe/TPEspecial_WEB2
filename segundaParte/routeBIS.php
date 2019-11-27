<?php
    require_once('controllers/equipo.controller.php');
    require_once('controllers/jugador.controller.php');
    require_once('controllers/login.controller.php');
    require_once('Router.php');

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //define("LOGIN", BASE_URL . 'login');
    define("LOGIN",'http://'.$_SERVER["SERVER_NAME"].$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"])."/login");

    $r = new Router();

    // RUTAS LOGIN
    $r->addRoute("login",         "GET",  "LoginController", "showLogin");
    $r->addRoute("verifyUser",    "POST", "LoginController", "verificarUsuario");
    $r->addRoute("registrarUser", "POST", "LoginController", "registrarUsuario");
    $r->addRoute("logout",        "GET",  "LoginController", "logout");
    // RUTAS EQUIPOS 
    $r->addRoute("verEquipos",         "GET",   "EquipoController", "showEquipos");
    $r->addRoute("verEquipo/:ID",      "GET",   "EquipoController", "showDetalleEquipo");
    $r->addRoute("nuevoEquipo",        "POST",  "EquipoController", "addEquipo");
    $r->addRoute("eliminarEquipo/:ID", "GET",   "EquipoController", "eliminaEquipo");
    $r->addRoute("editarEquipo/:ID",   "GET",   "EquipoController", "editaEquipo");
    $r->addRoute("actualizarEquipo",   "POST",  "EquipoController", "actualizaEquipo");
    // RUTAS JUGADORES
    $r->addRoute("verJugadores",        "GET",   "JugadorController", "showJugadores");
    $r->addRoute("verJugador/:ID",      "GET",   "JugadorController", "showDetalleJugador");
    $r->addRoute("nuevoJugador",        "POST",  "JugadorController", "addJugador");
    $r->addRoute("eliminarJugador/:ID", "GET",   "JugadorController", "eliminaJugador");
    $r->addRoute("editarJugador/:ID",   "GET",   "JugadorController", "editaJugador");
    $r->addRoute("actualizarJugador",   "POST",  "JugadorController", "actualizaJugador");
    // RUTAS USUARIOS
    $r->addRoute("verUsuarios",          "GET",   "LoginController", "showUsuarios");
    $r->addRoute("eliminarUsuario/:ID",  "GET",   "LoginController", "eliminaUsuario");
    $r->addRoute("editarUsuario/:ID",    "GET",   "LoginController", "editaUsuario");
    $r->addRoute("actualizarUsuario",    "POST",  "LoginController", "actualizaUsuario");

    //Ruta por defecto.
    $r->setDefaultRoute("LoginController", "showLogin");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
?>
