<?php

class ArticuloModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tnv_db;charset=utf8', 'root', '');
    }

    function getArticulos(){
        $statement = $this->db->prepare("SELECT * FROM articulos JOIN paises ON pais = id_pais");
        $statement->execute();
        $articulos = $statement->fetchAll(PDO::FETCH_OBJ);
        return $articulos;
    }

    function getArticulosByPais($pais){
        $statement = $this->db->prepare("SELECT * FROM articulos JOIN paises ON pais = id_pais WHERE nombre=?");
        $statement->execute(array($pais));
        $articulos = $statement->fetchAll(PDO::FETCH_OBJ);
        return $articulos;
    }

    function getArticulo($pais, $titulo){
        $statement = $this->db->prepare( "SELECT * FROM articulos JOIN paises ON pais = id_pais WHERE nombre=? AND titulo=?");
        $statement->execute(array($pais, $titulo));
        $articulo = $statement->fetch(PDO::FETCH_OBJ);
        return $articulo;
    }

    function getArticuloByID($id){
        $statement = $this->db->prepare( "SELECT * FROM articulos WHERE id_articulo=?");
        $statement->execute(array($id));
        $articulo = $statement->fetch(PDO::FETCH_OBJ);
        return $articulo;
    }

    function insertArticulo($titulo, $contenido, $imagen, $pais){
        $statement = $this->db->prepare("INSERT INTO articulos(titulo, contenido, imagen, pais) VALUES(?, ?, ?, ?)");
        $statement->execute(array($titulo, $contenido, $imagen, $pais ));
    }

    function updateArticulo($id, $titulo, $contenido, $imagen, $pais){
        $statementArticulos = $this->db->prepare("UPDATE articulos SET titulo = ?, contenido = ?, imagen = ?, pais = ? WHERE id_articulo=?");
        $statementArticulos->execute(array($titulo, $contenido, $imagen, $pais, $id));
    }

    function deleteArticulo($id){
        $statement = $this->db->prepare("DELETE FROM articulos WHERE id_articulo=?");
        $statement->execute(array($id));
    }

    function getPaises(){
        $statement = $this->db->prepare("SELECT * FROM paises");
        $statement->execute();
        $paises = $statement->fetchAll(PDO::FETCH_OBJ);
        return $paises;
    }
}
