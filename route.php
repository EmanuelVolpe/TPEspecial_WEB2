<?php
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    /**Tamb se podria haber definido a ("BASE_URL") como ("Location: " . BASE_URL . "verEquipos") y nos ahorrabamos
    /de escribir el "Location:  http://........"
    */
    define("LOGIN", BASE_URL . 'login');

    require_once('controllers/jugador.controller.php');
    require_once('controllers/equipo.controller.php');
    require_once('controllers/login.controller.php');

    // si no viene una "action", definimos una por defecto
    if ($_GET['action'] == '')
        $_GET['action'] = 'verEquipos';

    // parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
    $partesURL = explode('/', $_GET['action']);

    switch ($partesURL[0]) {
        case 'login':
            $controller = new LoginController();
            $controller->showLogin();
            break;

        case 'verifyUser':
            $controller = new LoginController();
            $controller->verificarUsuario();
            break;

        case 'verEquipos':
            $controller = new EquipoController();
            $controller->showEquipos();
            break;

        case 'verEquipo':
            $controller = new EquipoController();
            $controller->showDetalleEquipo($partesURL[1]);
            break;

        case 'eliminarEquipo'://NO TIENE QUE HABER JUGADORES DEL EQUIPO HA ELIMINAR PARA QUE DICHO EQUIPO SE ELIMINE
            $controller = new EquipoController();
            $controller->eliminaEquipo($partesURL[1]);
            break;

        case 'nuevoEquipo':
            $controller = new EquipoController();
            $controller->addEquipo();
            break;

        case 'editarEquipo':
            $controller = new EquipoController();
            $controller->editaEquipo($partesURL[1]);
            break;

        case 'actualizarEquipo':
            $controller = new EquipoController();
            $controller->actualizaEquipo();
            break;

        case 'verJugadores':
            $controller = new JugadorController();
            $controller->showJugadores();
            break;
        case 'verJugador':
            $controller = new JugadorController();
            $controller->showDetalleJugador($partesURL[1]);
            break;
        case 'nuevoJugador':
            $controller = new JugadorController();
            $controller->addJugador();
            break;
        case 'eliminarJugador':
            $controller = new JugadorController();
            $controller->eliminaJugador($partesURL[1]);
            break;
        case 'editarJugador':
            $controller = new JugadorController();
            $controller->editaJugador($partesURL[1]);
            break;

        case 'actualizarJugador':
            $controller = new JugadorController();
            $controller->actualizaJugador();
            break;

        case 'logout':
            $controller = new LoginController();
            $controller->logout();
            break;

        default:
            $controller = new EquipoController();
            $controller->showEquipos();
            break;
    }
?>
