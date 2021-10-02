<?php

require 'admin/config.php';
require 'functions.php';

$connection = connect($bd_config);
if (!$connection){
    header('Location: error.php');
} 

//$posts que tenga los 3 mas recientes 
$posts = getPosts($blog_confi['postbypage'],$connection);

require 'views/explore-view.php';

?>