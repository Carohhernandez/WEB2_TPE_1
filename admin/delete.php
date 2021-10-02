<?php session_start();

require 'config.php';
require '../functions.php';

checkSession();

$connection = connect($bd_config);
if(!$connection){
	header('Location: ../error.php');
}

$id = sanitizeData($_GET['id']);


if (!$id) {
	header('Location:' . path . '/admin');
}

$statement = $connection->prepare('DELETE FROM tnv_articles WHERE id = :id');
$statement->execute(array('id' => $id));

header('Location: ' . path . '/admin');

?>