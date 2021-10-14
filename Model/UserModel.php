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

    function insertAdmin(){
        $email = 'admin@gmail.com';
        $userPassword = password_hash('123456',PASSWORD_BCRYPT);

        $query = $this->db->prepare('INSERT INTO usuarios (email, password) VALUES (? , ?)');
        $query->execute([$email,$userPassword]);

        echo "admin insertado";
    }
}