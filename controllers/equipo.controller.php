<?php
include_once('models/equipo.model.php');
include_once('views/equipo.view.php');
include_once('helpers/auth.helper.php');

class EquipoController {

    private $model;
    private $view;
    private $authHelper;

    public function __construct() {

        $this->model = new EquipoModel();
        $this->view = new EquipoView();
        $this->authHelper = new AuthHelper();
    }

    function showDetalleEquipo($idEquipo){

        $equipo = $this->model->getUnoSolo($idEquipo);

        $uneJugadoresEquipos = $this->model->joinTablas($idEquipo);
        if ($equipo) {
            $equipo = $this->model->getUnoSolo($idEquipo);
            $this->view->showEquipo($equipo, $uneJugadoresEquipos);  
        } else {
            $this->view->showError("EL EQUIPO NO EXISTE");
        }
    }

    /**
     * Muestra la lista de Equipos.
     */
    public function showEquipos() {
        // obtengo todos los equipos del model
        $equipos = $this->model->getAllEquipos();
        // se los paso a la vista
        $this->view->showEquiposVista($equipos);
    }

    /**
     * Agrega un nuevo Equipo a la lista.
     */
    public function addEquipo() {
        // barrera de administradores
        $this->authHelper->checkLoggedIn();
        
        $nombre = $_POST['nombre'];
        $pais = $_POST['pais'];
        $canTitulos = $_POST['cantidadTitulos'];
        
        if (!empty($nombre) && !empty($pais) && is_numeric($canTitulos)) {
            $this->model->save($nombre, $pais, $canTitulos);
            header("Location: " . BASE_URL . "verEquipos");
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    }

    public function editaEquipo($idEquipo) {

        // barrera de administradores
        $this->authHelper->checkLoggedIn();
        $equipo = $this->model->getUnoSolo($idEquipo);
        //var_dump($equipo);
        $this->view->showEdicion($equipo);
  
    }

    public function actualizaEquipo() {

        $nombre = $_POST['nombreEditado'];
        $pais = $_POST['paisEditado'];
        $canTitulos = $_POST['cantidadTitulosEditado'];
        $id_equipo = $_POST["id_equipo"];
        //var_dump($_POST);

        if (!empty($nombre) && !empty($pais) && is_numeric($canTitulos)) {
            $this->model->edita($canTitulos, $nombre, $pais, $id_equipo);
            header("Location: " . BASE_URL . "verEquipos");
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    
    }

    /**
     * Elimina un equipo de la lista.
     */
    public function deleteEquipo($idEquipo) {
        // barrera de administradores
        $this->authHelper->checkLoggedIn();
        $this->model->delete($idEquipo);
        header("Location: " . BASE_URL . "verEquipos");
    }

}
  
