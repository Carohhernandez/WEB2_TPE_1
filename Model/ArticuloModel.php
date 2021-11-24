<?php

class ArticuloModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tnv_db;charset=utf8', 'root', '');
    }

    function getArticulos($inicio, $postPorPagina){
        $statement = $this->db->prepare("SELECT * FROM articulos JOIN paises ON pais = id_pais LIMIT $inicio, $postPorPagina");
        $statement->execute();
        $articulos = $statement->fetchAll(PDO::FETCH_OBJ);
        return $articulos;
    }

    function getTotalArticulos(){
        $statement = $this->db->prepare("SELECT COUNT(*) as totalCount FROM articulos");
        $statement->execute();
        $total = $statement->fetch(PDO::FETCH_OBJ);
        return $total->totalCount;
    }

    function getArticulosByPais($pais, $inicio, $postPorPagina){
        $statement = $this->db->prepare("SELECT * FROM articulos JOIN paises ON pais = id_pais WHERE nombre=? LIMIT $inicio, $postPorPagina");
        $statement->execute(array($pais));
        $articulos = $statement->fetchAll(PDO::FETCH_OBJ);
        return $articulos;
    }

    
    function getTotalArticulosByPais($pais){
        $statement = $this->db->prepare("SELECT COUNT(*) FROM articulos JOIN paises ON pais = id_pais WHERE nombre=?");
        $statement->execute(array($pais));
        $total = $statement->fetchAll(PDO::FETCH_OBJ);
        return $total;
    }

    function getArticulo($pais, $id){
        $statement = $this->db->prepare( "SELECT * FROM articulos JOIN paises ON pais = id_pais WHERE nombre=? AND id_articulo=?");
        $statement->execute(array($pais, $id));
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
        $statementComentarios = $this->db->prepare("DELETE FROM comentarios WHERE id_articulo=?");
        $statementComentarios->execute(array($id));
        $statementArticulos = $this->db->prepare("DELETE FROM articulos WHERE id_articulo=?");
        $statementArticulos->execute(array($id));
    }

    function getPaises(){
        $statement = $this->db->prepare("SELECT * FROM paises");
        $statement->execute();
        $paises = $statement->fetchAll(PDO::FETCH_OBJ);
        return $paises;
    }
}
