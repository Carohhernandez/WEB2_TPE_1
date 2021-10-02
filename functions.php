<?php

function connect($bd_config){
    try {
        $connection = new PDO('mysql:host=localhost;dbname='.$bd_config['database'], $bd_config['user'],$bd_config['password']);
        return $connection;
    } catch (PDOException $e) {
        return false;
    }
}

function sanitizeData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function getCurrentPage(){
    return isset($_GET['p']) ? (int)$_GET['p']: 1; 
}

function getPosts($postByPage, $connection){
    $start = (getCurrentPage() > 1) ? getCurrentPage()* $postByPage - $postByPage : 0;
    $statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM tnv_articles LIMIT $start, $postByPage");
    $statement->execute();
    return $statement->fetchAll();
}

function getNumberOfPages($postByPage, $connection){
    //FOUND_ROWS calls SQL_CALC_FOUND_ROWS
    $totalPosts = $connection->prepare('SELECT FOUND_ROWS() as total');
    $totalPosts->execute();
    $totalPosts = $totalPosts->fetch()['total'];

    $NumberOfPages = ceil($totalPosts/$postByPage);
    return $NumberOfPages;
}

//Prevent the user to inject wrong information by URL for page number
function getArticleId($id){
    return (int)sanitizeData($id);
}

function getPostById($connection, $id){
    $result = $connection->query("SELECT * FROM tnv_articles WHERE id = $id LIMIT 1");
    $result = $result->fetchAll();
    return ($result) ? $result : false;
}

function checkSession(){
	if (!isset($_SESSION['admin'])) {
		header('Location: ' . path . 'login.php');
	}
}

?>