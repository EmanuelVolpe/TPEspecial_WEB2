<?php
    require_once('libs/Smarty.class.php');
    require_once('helpers/auth.helper.php');
    require_once('controllers/login.controller.php');

class UsuarioView {

    private $smarty;

    public function __construct() {

        $authHelper = new AuthHelper();
        //$userName = $authHelper->getLoggedUserName();
        
        $this->smarty = new Smarty();
        $this->smarty->assign('baseURL', BASE_URL);
        $this->smarty->assign('userName', $authHelper->getLoggedUserName());
        $this->smarty->assign('isAdmin', $authHelper->getAdmin());
    }

    public function muestraUsuarios($usuarios) {
        $this->smarty->assign('titulo', 'Lista de Usuarios');
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('templates/usuarios.tpl');
    }

    public function showEdicion($usuario) {
        $this->smarty->assign('titulo', 'Edicion de Usuario');
        $this->smarty->assign('usuario', $usuario);
        $this->smarty->display('templates/usuarioEdit.tpl');
    }

    public function showError($msgError) {
        echo "<h1>ERROR!</h1>";
        echo "<h2>{$msgError}</h2>";
    }
}