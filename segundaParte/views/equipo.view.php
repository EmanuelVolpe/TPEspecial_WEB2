<?php
    require_once('libs/Smarty.class.php');
    require_once('helpers/auth.helper.php');
    require_once('controllers/login.controller.php');

class EquipoView {

    private $smarty;

    public function __construct() {

        $authHelper = new AuthHelper();
        //$userName = $authHelper->getLoggedUserName();
       
        $this->smarty = new Smarty();
        $this->smarty->assign('baseURL', BASE_URL);
        $this->smarty->assign('userName', $authHelper->getLoggedUserName());
        $this->smarty->assign('isAdmin', $authHelper->getAdmin());
        
    }

    public function showEquiposVista($equipos) {
        $this->smarty->assign('titulo', 'Lista de Equipos');
        $this->smarty->assign('equipos', $equipos);
        $this->smarty->display('templates/equipoList.tpl');

    }

    public function showEdicion($equipo) {
        $this->smarty->assign('titulo', 'Edicion de Equipo');
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->display('templates/equipoEdit.tpl');
    }

    public function showError($msgError) {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }

    /**
     * Construye el html que permite visualizar el detalle de una EQUIPO determinado.
     */
    public function showEquipo($equipo, $jugadoresDelEquipo) {
        $this->smarty->assign('titulo','Detalle del Equipo');
        $this->smarty->assign('equipo', $equipo);
        $this->smarty->assign('jugadoresDelEquipo', $jugadoresDelEquipo);
        $this->smarty->display('templates/equipoDetail.tpl');
    }
}
