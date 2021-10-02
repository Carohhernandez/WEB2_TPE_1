<?php

require 'admin/config.php';
require 'functions.php';

$connection = connect($bd_config);
if (!$connection){
    header('Location: error.php');
} 

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search_input'])){
    $search = sanitizeData($_GET['search_input']);

    $statement = $connection->prepare(
        'SELECT * FROM tnv_articles WHERE title LIKE :search or content LIKE :search or subtitle LIKE :search'
    );
    $statement->execute(array(':search' => "%$search%"));
    $result = $statement->fetchAll();

    if(empty($result)){
        $title = 'No articles where found for ' . $search;
    } else {
        $title = 'Articles found for '. $search;
    }
} else {
    header('Location: ' . path . '/index.php');
}

require 'views/search-view.php';

?>