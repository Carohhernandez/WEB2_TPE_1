<?php

require 'admin/config.php';
require 'functions.php';

$connection = connect($bd_config);
$articleId = getArticleId($_GET['id']);

if (!$connection){
    header('Location: error.php');
} 

if (empty($articleId)){
    header('Location: index.php');
} 

$post = getPostById($connection, $articleId);

if (!$post){
    header('Location: index.php');
}

//array[0] with the result is inside another array
$post = $post[0];

require 'views/single-view.php';

?>