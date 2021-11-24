<?php

class UserModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=tnv_db;charset=utf8', 'root', '');
    }

    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function getUsers($email){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE email != ? ');
        $query->execute(array($email));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function insertUser($email, $password){
        $userPassword = password_hash($password,PASSWORD_BCRYPT);
        $query = $this->db->prepare('INSERT INTO usuarios (email, password, admin_role) VALUES (? , ?, ?)');
        $query->execute([$email,$userPassword,0]);
    }

    function changeRole($userId, $role){
        $query = $this->db->prepare('UPDATE usuarios SET admin_role = ? WHERE id_usuario = ?');
        $query->execute([$role, $userId]);
    }

    function deleteUser($id){
        $query = $this->db->prepare('DELETE FROM usuarios WHERE id_usuario = ?');
        $query->execute([$id]);
    }
}