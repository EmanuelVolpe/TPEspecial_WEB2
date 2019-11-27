<?php
    require_once('libs/Smarty.class.php');

    class LoginView {

        private $smarty;
     
        public function __construct() {
            $this->smarty = new Smarty();
            $this->smarty->assign('baseURL', BASE_URL);
        }

        public function showLoginView($error = null){
            $this->smarty->assign('titulo', 'Iniciar Sesión');
            $this->smarty->assign('tituloRegistro', 'Registrarme');
            $this->smarty->assign('error', $error);
            $this->smarty->display('templates/login.tpl');
        }

    }