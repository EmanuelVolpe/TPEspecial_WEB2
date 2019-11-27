<?php

class JugadorModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_Especial;charset=utf8', 'root', '');
    }

    public function getDetalleJugador($idJugador){

        $query = $this->db->prepare('SELECT jugador.id_jugador, equipo.id_equipo, equipo.nombre AS nombreEquipo, equipo.pais AS pais, equipo.cantidad_titulos AS titulos, jugador.nombre AS jugador, jugador.imagen AS imagen, jugador.posicion AS posicion
                 FROM equipo JOIN jugador ON equipo.id_equipo = jugador.id_equipo WHERE jugador.id_jugador=?');
        $query->execute(array($idJugador));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Obtiene la lista de jugadores ordenando alfabeticamente por posicion.
     */
    public function getAllJugadores() {

        $query = $this->db->prepare('SELECT * FROM jugador ORDER BY posicion');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
    * Retorna un jugador según el id pasado.
     */
    public function getUnoSolo($idJugador) {

        $query = $this->db->prepare('SELECT * FROM jugador WHERE id_jugador = ?');
        $query->execute(array($idJugador));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Guarda un jugador en la base de datos.
     */
    public function save($nombre, $idEquipo, $posicion, $imagen = null) {

        $pathImg = null;
        if ($imagen)
            $pathImg = $this->uploadImage($imagen);

        $query = $this->db->prepare('INSERT INTO jugador(nombre, id_equipo, posicion, imagen) VALUES(?,?,?,?)');
        $query->execute([$nombre, $idEquipo, $posicion, $pathImg]);

        return $this->db->lastInsertId();
    }

    private function uploadImage($image){
        $target = "images/" . uniqid() . "." . strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));  
        move_uploaded_file($image['tmp_name'], $target);
        return $target;
    }

    /**
     * Elimina un jugador de la BBDD según el id pasado.
     */
    function delete($idJugador) {

        $query = $this->db->prepare('DELETE FROM jugador WHERE id_jugador = ?');
        $query->execute([$idJugador]);

    }

    /**
     * Actualiza un jugador de la BBDD según el id pasado.
     */
    public function edita($idEquipo, $nombre, $posicion, $idJugador) {

        $query = $this->db->prepare('UPDATE jugador SET id_equipo = ?, nombre = ?, posicion =? WHERE id_jugador = ?');
        $query->execute(array($idEquipo, $nombre, $posicion, $idJugador));
    }

}
