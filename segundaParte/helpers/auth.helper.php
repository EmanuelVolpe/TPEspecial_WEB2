<?php

class AuthHelper {

    public function __construct() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public function login($user) {
        $_SESSION['ID_USER'] = $user->id_usuario;
        $_SESSION['USERNAME'] = $user->username;
        $_SESSION['ADMIN'] = $user->administ;
    }

    public function logout() {
        session_start();
        session_destroy();
    }

    // BARRERA PARA USUARIOS LOGUEADOS
    public function checkLoggedIn() {
        if (!isset($_SESSION['ID_USER'])) {
            header('Location: ' . LOGIN);
            die();
        }       
    }

    // BARRERA PARA USUARIOS ADMINISTRADORES
    public function checkLoggedAdmin() {
        if (!(isset($_SESSION['ADMIN']) && $_SESSION['ADMIN']==1)) { // SI NO SOS ADMIN
            header('Location: ' . verJugadores);
            die();
        }       
    }

    public function getLoggedUserName() {
        if (isset($_SESSION['USERNAME']))
            return $_SESSION['USERNAME'];
        else 
            return null; 
    }

    public function getAdmin(){
        if (isset($_SESSION['ADMIN']))
        return $_SESSION['ADMIN'];
    else 
        return null;
    }

    public function getUserID(){
        if (isset($_SESSION['ID_USER']))
        return $_SESSION['ID_USER'];
    else 
        return null;
    }
}