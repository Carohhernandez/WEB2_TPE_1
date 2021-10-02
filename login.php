<?php 

session_start();

require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = sanitizeData($_POST['user']);
	$password = sanitizeData($_POST['password']);

	if ($usuario == $blog_admin['user'] && $password == $blog_admin['password']) {
		$_SESSION['admin'] = $blog_admin['user'];
		header('Location: '. path . '/admin');
	}
}

require 'views/login-view.php';

?>