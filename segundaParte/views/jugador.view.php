<?php
    require_once('libs/Smarty.class.php');
    require_once('helpers/auth.helper.php');
    require_once('controllers/login.controller.php');

class JugadorView {

    private $smarty;

    public function __construct() {

        $authHelper = new AuthHelper();
        //$userName = $authHelper->getLoggedUserName();

        $this->smarty = new Smarty();
        $this->smarty->assign('baseURL', BASE_URL);
        $this->smarty->assign('userName', $authHelper->getLoggedUserName());
        $this->smarty->assign('isAdmin', $authHelper->getAdmin());

    }

    public function showJugadoresVista($jugadores, $equipos) {
        $this->smarty->assign('titulo', 'Lista de Jugadores');
        $this->smarty->assign('jugadores', $jugadores);
        $this->smarty->assign('equipos', $equipos);
        $this->smarty->display('templates/jugadorList.tpl');
    }

    public function showEdicion($jugador, $equipos) {
        $this->smarty->assign('titulo', 'Edicion de Jugador');
        $this->smarty->assign('jugador', $jugador);
        $this->smarty->assign('equipos', $equipos);
        $this->smarty->display('templates/jugadorEdit.tpl');
    }

    public function showError($msgError) {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }

    /**
     * Construye el html que permite visualizar el detalle de una JUGADOR determinado.
     */
    public function showJugador($jugador) {
        $this->smarty->assign('titulo', 'Detalle del Jugador');
        $this->smarty->assign('jugador', $jugador);
        $this->smarty->display('templates/jugadorDetail.tpl');
    }
}