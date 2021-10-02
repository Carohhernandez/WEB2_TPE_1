<?php session_start();
require 'config.php';
require '../functions.php';

checkSession();

$connection = connect($bd_config);

if(!$connection){
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title = sanitizeData($_POST['title']);
	$subtitle = sanitizeData($_POST['subtitle']);
	$content = $_POST['content'];
	$thumb = $_FILES['thumb']['tmp_name'];

	$uploadFile = '../' . $blog_confi['image_folder'] . $_FILES['thumb']['name'];

	move_uploaded_file($thumb, $uploadFile);

	$statement = $connection->prepare(
		'INSERT INTO tnv_articles (id, title, subtitle, content, thumb) 
		VALUES (null, :title, :subtitle, :content, :thumb)'
	);

	$statement->execute(array(
		':title' => $title,
		':subtitle' => $subtitle,
		':content' => $content,
		':thumb' => $_FILES['thumb']['name']
	));

	header('Location: ' . path . '/admin');
}


require '../views/new-view.php';

?>