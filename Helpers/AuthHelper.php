<?php

class AuthHelper{

    function __construct(){
    }

    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){
            return false;
        } else {
            return true;
        }
    }

    function getLoggedUserEmail(){
        if(!isset($_SESSION["email"])){
            return null;
        } else {
            return $_SESSION["email"];
        }
    }
}