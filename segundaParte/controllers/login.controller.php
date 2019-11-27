<?php
include_once('./views/login.view.php');
include_once('./views/usuario.view.php');
include_once('./models/user.model.php');
include_once('./helpers/auth.helper.php');

class LoginController {

    private $view;
    private $userView;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
        $this->userView = new UsuarioView();
    }

    public function showLogin() {
        $this->view->showLoginView();
    }

    public function verificarUsuario() {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $user = $this->model->getByUserName($username);

        if (!empty($user) && password_verify($pass, $user->pass) && ($user->admin == 1)) {
            $this->authHelper->login($user);
           header("Location: " . BASE_URL . "verEquipos");
            
        }
        elseif (!empty($user) && password_verify($pass, $user->pass) && ($user->admin == 0)){
            $this->authHelper->login($user);  
            header("Location: " . BASE_URL . "verEquipos");
        } 
        else {
            $this->view->showLoginView("Login incorrecto");
        }
    }

    public function registrarUsuario() {
        $usernameRegistro = $_POST['usernameRegistro'];
        $passwordRegistro = $_POST['passwordRegistro'];
       
        $hash = password_hash($passwordRegistro, PASSWORD_DEFAULT);
        $this->model->agregaUsuario($usernameRegistro, $hash);
    
        $user = $this->model->getByUserName($usernameRegistro);
        $this->authHelper->login($user);
    
        header("Location: " . BASE_URL . "verEquipos");

    }
    
    public function logout() {
        $this->authHelper->logout();
        header('Location: ' . LOGIN);
    }

    public function showUsuarios() {
        $this->authHelper->checkLoggedAdmin();
        $usuarios = $this->model->getAllUsers();
        $this->userView->muestraUsuarios($usuarios);
    }

    public function eliminaUsuario($params= null) {

        $idUsuario = $params[":ID"];
        // barrera de administradores
        $this->authHelper->checkLoggedAdmin();
        $this->model->delete($idUsuario);
        header("Location: " . BASE_URL . "verUsuarios");
    }

    public function editaUsuario($params= null) {

        $idUsuario = $params[":ID"];
        // barrera de administradores
        $this->authHelper->checkLoggedAdmin();
        $usuario = $this->model->getUsuario($idUsuario);
        $this->userView->showEdicion($usuario);
    }

    public function actualizaUsuario() {

        $administrador = $_POST['administrador'];
        $idUsuario = $_POST["id_usuario"];
        $_SESSION['ID_USER'];
        //var_dump($_POST);
        //var_dump($_SESSION);
        //die();


        if (is_numeric($administrador)) {
            $this->model->editaPrivilegios($administrador, $idUsuario);
            if((($administrador == 1) && ($idUsuario = $_SESSION['ID_USER'])) || (($idUsuario!= $_SESSION['ID_USER'])))
                header("Location: " . BASE_URL . "verUsuarios");
            elseif ((($administrador == 0) && ($idUsuario = $_SESSION['ID_USER'])) )
                header("Location: " . BASE_URL . "login");
        } else {
            $this->userView->showError("Faltan datos obligatorios");
        }
    }

}