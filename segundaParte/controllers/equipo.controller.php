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

     /**
     * Muestra la lista de Equipos.
     */
    public function showEquipos() {
        // obtengo todos los equipos del model
        $equipos = $this->model->getAllEquipos();
        // se los paso a la vista
        $this->view->showEquiposVista($equipos);
    }
        
    

    public function showDetalleEquipo($params= null){

        $idEquipo = $params[":ID"];
        $equipo = $this->model->getUnEquipoSolo($idEquipo);
        $jugadoresDelEquipo = $this->model->getJugadoresDeUnEquipo($idEquipo);
        if ($equipo) {
            $equipo = $this->model->getUnEquipoSolo($idEquipo);
            $this->view->showEquipo($equipo, $jugadoresDelEquipo);
        } else {
            $this->view->showError("EL EQUIPO NO EXISTE");
        }
    }

    /**
     * Elimina un equipo de la lista.
     */
    public function eliminaEquipo($params= null) {
        
        $idEquipo = $params[":ID"];
        // barrera de administradores
        $this->authHelper->checkLoggedAdmin();
        $this->model->delete($idEquipo);
        header("Location: " . BASE_URL . "verEquipos");
    }

    /**
     * Agrega un nuevo Equipo a la lista.
     */
    public function addEquipo() {
        // barrera de administradores
        $this->authHelper->checkLoggedAdmin();
        
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

    public function editaEquipo($params= null) {

        $idEquipo = $params[":ID"];
        // barrera de administradores
        $this->authHelper->checkLoggedAdmin();
        $equipo = $this->model->getUnEquipoSolo($idEquipo);
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
}
