<?php session_start();
require 'config.php';
require '../functions.php';


$connection = connect($bd_config);
if(!$connection){
	header('Location: ../error.php');
}

checkSession();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$title = sanitizeData($_POST['title']);
	$subtitle = sanitizeData($_POST['subtitle']);
	$content = $_POST['content'];
	$id = sanitizeData($_POST['id']);
	$thumb_saved = $_POST['thumb_saved'];
	$thumb = $_FILES['thumb'];

	if (empty($thumb['name'])) {
		$thumb = $thumb_saved;
	} else {
		$uploadedFile = '../' . $blog_config['image_folder'] . $_FILES['thumb']['name'];

		move_uploaded_file($_FILES['thumb']['tmp_name'], $uploadedFile);
		$thumb = $_FILES['thumb']['name'];

	}

	$statement = $connection->prepare('UPDATE tnv_articles SET title = :title, subtitle = :subtitle, content = :content, thumb = :thumb WHERE id = :id');
	$statement->execute(array(
		':title' => $title,
		':subtitle' => $subtitle,
		':content' => $content,
		':thumb' => $thumb,
		':id' => $id
	));

	header("Location: " . path . '/admin');
} else {
	$articleId = getArticleId($_GET['id']);

	if (empty($articleId)) {
		header('Location: ' . path . '/admin');
	}

	$post = getPostById($connection, $articleId);

	if (!$post) {
		header('Location: ' . path . '/admin/index.php');
	}
	$post = $post[0];
}

require '../views/edit-view.php';

?>