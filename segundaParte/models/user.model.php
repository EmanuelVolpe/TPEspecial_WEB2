<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_Especial;charset=utf8', 'root', '');
    }

    public function agregaUsuario($usernameRegistro, $hash){
        $query = $this->db->prepare('INSERT INTO usuario(username, pass) VALUES(?,?)');
        $query->execute([$usernameRegistro, $hash]);
    }

    /**
     * Retorna un usuario según el username pasado.
     */
    public function getByUserName($username) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE username = ?');
        $query->execute(array($username));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getAllUsers() {
        $query = $this->db->prepare('SELECT * FROM usuario ORDER BY username ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getUsuario($idUsuario){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
        $query->execute(array($idUsuario));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Elimina un usuario de la BBDD según el id pasado.
     */
    function delete($idUsuario) {
        $query = $this->db->prepare('DELETE FROM usuario WHERE id_usuario = ?');
        $query->execute([$idUsuario]);
    }

    /**
     * Actualiza los privilegios de ADMINISTRADOR de la BBDD según el id pasado.
     */
    public function editaPrivilegios($administrador, $idUsuario) {
        $query = $this->db->prepare('UPDATE usuario SET administ = ? WHERE id_usuario = ?');
        $query->execute(array($administrador, $idUsuario));
    }
}