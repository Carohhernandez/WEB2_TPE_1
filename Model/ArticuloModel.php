<?php

class ArticuloModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tnv_db;charset=utf8', 'root', '');
    }

    function getArticulos(){
        $statement = $this->db->prepare("SELECT * FROM articulos");
        $statement->execute();
        $articulos = $statement->fetchAll(PDO::FETCH_OBJ);
        return $articulos;
    }

    function getArticulo($id){
        $statement = $this->db->prepare( "select * from articulos WHERE id_articulo=?");
        $statement->execute(array($id));
        $articulo = $statement->fetch(PDO::FETCH_OBJ);
        return $articulo;
    }

    function insertArticulo($titulo, $contenido, $imagen, $pais){
        $statement = $this->db->prepare("INSERT INTO articulos(titulo, contenido, imagen, pais) VALUES(?, ?, ?, ?)");
        $statement->execute(array($titulo, $contenido, $imagen, $pais ));
    }

    function deleteArticulo($id){
        $statement = $this->db->prepare("DELETE FROM articulos WHERE id_articulo=?");
        $statement->execute(array($id));
    }


}
