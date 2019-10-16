<?php

class JugadorModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_Especial;charset=utf8', 'root', '');
    }

    public function joinTablas($idJugador){
        
        $query = $this->db->prepare('SELECT jugador.id_jugador, equipo.id_equipo, equipo.nombre AS nombreEquipo, equipo.pais AS pais, equipo.cantidad_titulos AS titulos, jugador.nombre AS jugador, jugador.posicion AS posicion
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
    public function save($nombre, $idEquipo, $posicion) {
        
        $query = $this->db->prepare('INSERT INTO jugador(nombre, id_equipo, posicion) VALUES(?,?,?)');
        $query->execute([$nombre, $idEquipo, $posicion]);
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