<?php

class ComentarioModel {

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tnv_db;charset=utf8', 'root', '');
    }

    function getComentariosByArticulo($id_articulo){
        $statement = $this->db->prepare("SELECT * FROM comentarios WHERE id_articulo = ?");
        $statement->execute(array($id_articulo));
        $comentarios = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $comentarios;
    }

    function getComentarioById($id_comentario){
        $statement = $this->db->prepare("SELECT * FROM comentarios WHERE id_comentario = ?");
        $statement->execute(array($id_comentario));
        $comentario = $statement->fetch(PDO::FETCH_ASSOC);
        return $comentario;
    }

    function insertComentario($comentario, $puntuacion, $id_articulo, $id_usuario) {
        $statement = $this->db->prepare("INSERT INTO comentarios(comentario, puntuacion, id_articulo, id_usuario) VALUES(?, ?, ?, ?)");
        $statement->execute(array($comentario, $puntuacion, $id_articulo, $id_usuario));
        return $this->db->lastInsertId();
    }

    function deleteComentario($id){
        $statement = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
        $statement->execute(array($id));
    }
}