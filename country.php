<?php

require 'admin/config.php';
require 'functions.php';

$connection = connect($bd_config);
if (!$connection){
    header('Location: error.php');
} 

$countryName = $_GET['country'];

$posts = getPosts($blog_confi['postbypage'],$connection);

require 'views/country-view.php';

?>