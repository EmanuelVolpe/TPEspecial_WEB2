<?php

class AuthHelper {

    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function login($user) {
        $_SESSION['ID_USER'] = $user->id_usuario;
        $_SESSION['USERNAME'] = $user->username;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    //ESTO SIRVE DE BARRERA PARA ADMINISTRADORES
    public function checkLoggedIn() {
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . LOGIN);
            die();
        }       
    }

    public function getLoggedUserName() {
        if (isset($_SESSION['USERNAME']))
            return $_SESSION['USERNAME'];
        else 
            return null; 
    }
}