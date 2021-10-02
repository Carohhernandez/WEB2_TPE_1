<?php session_start();
require 'config.php';
require '../functions.php';

$connection = connect($bd_config);

checkSession();

if (!$connection){
    header('Location: error.php');
} 

$posts = getPosts($blog_confi['postbypage'],$connection);

require '../views/admin-index-view.php';
?>