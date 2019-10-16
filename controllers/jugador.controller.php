<?php
include_once('models/jugador.model.php');
include_once('views/jugador.view.php');
include_once('models/equipo.model.php');
include_once('helpers/auth.helper.php');

class JugadorController {

    private $model;
    private $view;
    private $modelEquipo;
    private $authHelper;

    public function __construct() {
        $this->model = new JugadorModel();
        $this->view = new JugadorView();
        $this->modelEquipo = new EquipoModel();
        $this->authHelper = new AuthHelper();
    }

    /**
     * Muestra la lista de jugadores.
     */
    public function showJugadores() {
        
        // obtengo todos los jugadores del model
        $jugadores = $this->modelEquipo->uneTablas();
        $equipos = $this->modelEquipo->getAllEquipos();
        // se los paso a la vista
        $this->view->showJugadoresVista($jugadores,$equipos);
    }

    public function showDetalleJugador($idJugador) {   
        
        $jugador = $this->model->joinTablas($idJugador);
        if ($jugador) {
            $this->view->showJugador($jugador);
        }
        else
            $this->view->showError('El jugador no existe');
    }

    /**
     * Agrega un nuevo jugador a la lista.
     */
    public function addJugador() {
        // barrera de administradores
        $this->authHelper->checkLoggedIn();
        
        $nombre = $_POST['nombre'];
        $posicion = $_POST['posicion'];
        $idEquipo = $_POST['id_equipo'];
        if (!empty($nombre) && !empty($posicion) && is_numeric($idEquipo)) {
           $this->model->save($nombre, $idEquipo, $posicion);
           header("Location: " . BASE_URL . "verJugadores");
        } else {
           $this->view->showError("Faltan datos obligatorios");
        }
    }

    /**
     * Elimina un jugador de la lista.
     */
    public function deleteJugador($idJugador) {

        // barrera de administradores
        $this->authHelper->checkLoggedIn();
        $this->model->delete($idJugador);
        header("Location: " . BASE_URL . "verJugadores");
    }

    public function editaJugador($idJugador) {

        // barrera de administradores
        $this->authHelper->checkLoggedIn();
        $jugador = $this->model->joinTablas($idJugador);
        $equipos = $this->modelEquipo->getAllEquipos();
        $this->view->showEdicion($jugador, $equipos);
    }

    public function actualizaJugador() {

        $nombre = $_POST['nombreEditado'];
        $posicion = $_POST['posicionEditada'];
        $id_equipo = $_POST["id_equipoEditado"];
        $id_jugador = $_POST["id_jugadorEditado"];
        var_dump($id_jugador);
        
        if (!empty($nombre) && !empty($posicion)) {
            $this->model->edita($id_equipo, $nombre, $posicion, $id_jugador);
            var_dump($id_equipo, $nombre, $posicion, $id_jugador);
            header("Location: " . BASE_URL . "verJugadores");
        } else {
            $this->view->showError("Faltan datos obligatorios");
        }
    }
}