<?php
include_once('./views/login.view.php');
include_once('./models/user.model.php');
include_once('./helpers/auth.helper.php');

class LoginController {

    private $view;
    private $model;
    private $authHelper;

    public function __construct() {
        $this->view = new LoginView();
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin() {
        $this->view->showLoginView();
    }

    public function verificarUsuario() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->model->getByUserName($username);
        //var_dump($_POST);

        //  encontró un user con el username que mandó, y tiene la misma contraseña
        if (!empty($user) && password_verify($password, $user->password)) {
           var_dump($user);
            $this->authHelper->login($user);
            header("Location: " . BASE_URL . "verEquipos");
        } else {
            $this->view->showLoginView("Login incorrecto");
        } 
    }

    public function logout() {
        $this->authHelper->logout();
        header('Location: ' . LOGIN);
    }

}