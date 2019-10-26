<?php

class EquipoModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_Especial;charset=utf8', 'root', '');
    }

    /**
     * Obtiene la lista de los equipos ordenando alfabeticamente por pais.
     */
    public function getAllEquipos() {

        $query = $this->db->prepare('SELECT * FROM equipo ORDER BY nombre ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * Retorna un equipo según el id pasado con todos sus jugadores. HACE UN JOIN ENTRE TABLAS!!!!
     */
    public function getJugadoresDeUnEquipo($idEquipo){ // getJugadoresByEquipo

        $query = $this->db->prepare('SELECT equipo.id_equipo, equipo.nombre AS nombreEquipo, equipo.pais AS pais, equipo.cantidad_titulos AS titulos, jugador.nombre AS jugador, jugador.posicion AS posicion
                 FROM equipo JOIN jugador ON equipo.id_equipo = jugador.id_equipo WHERE equipo.id_equipo=? ORDER BY posicion ASC');
        $query->execute(array($idEquipo));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    public function getJugadoresConDetalle(){ // getJugadoresConEquipos

        $query = $this->db->prepare('SELECT equipo.nombre AS nombreEquipo, equipo.pais AS pais, equipo.cantidad_titulos AS titulos, jugador.id_jugador,
                jugador.nombre AS nombreJugador, jugador.posicion AS posicion FROM equipo JOIN jugador
               ON equipo.id_equipo = jugador.id_equipo ORDER BY nombreEquipo ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

        /**
         * Guarda un equipo en la base de datos.
         */
        public function save($nombre, $pais, $canTitulos) {

            $query = $this->db->prepare('INSERT INTO equipo(nombre, pais, cantidad_titulos) VALUES(?,?,?)');
            $query->execute([$nombre, $pais, $canTitulos]);
        }

        /**
         * Elimina un equipo de la BBDD según el id pasado.
         * OJOOOOO, NO TIENE QUE HABER JUGADORES DEL EQUIPO SELECCIONADO PARA PODER ELIMINAR EL EQUIPO!!!!
        */
        public function delete($idEquipo) {

            $query = $this->db->prepare('DELETE FROM equipo WHERE id_equipo = ?');
            $query->execute([$idEquipo]);
        }

        /**
        * Retorna un equipo según el id pasado.
        */
        public function getUnEquipoSolo($idEquipo) {

           $query = $this->db->prepare('SELECT * FROM equipo WHERE id_equipo = ?');
           $query->execute(array($idEquipo));
           return $query->fetch(PDO::FETCH_OBJ);
        }

        public function edita($canTitulos, $nombre, $pais, $idEquipo) {

            $query = $this->db->prepare('UPDATE equipo SET cantidad_titulos = ?, nombre = ?, pais =? WHERE id_equipo = ?');
            $query->execute(array($canTitulos, $nombre, $pais, $idEquipo));
        }
}
