<?php

class PaisModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tnv_db;charset=utf8', 'root', '');
    }

    function getPaises(){
        $statement = $this->db->prepare("SELECT * FROM paises");
        $statement->execute();
        $paises = $statement->fetchAll(PDO::FETCH_OBJ);
        return $paises;
    }

    function getPais($id){
        $statement = $this->db->prepare( "select * from paises WHERE id_pais=?");
        $statement->execute(array($id));
        $pais = $statement->fetch(PDO::FETCH_OBJ);
        return $pais;
    }

    function insertPais($nombre){
        $statement = $this->db->prepare("INSERT INTO paises(nombre) VALUES(?)");
        $statement->execute(array($nombre));
    }

    function deletePais($id){
        $statement = $this->db->prepare("DELETE FROM paises WHERE id_pais=?");
        $statement->execute(array($id));
    }


}
