<?php

require 'admin/config.php';
require 'functions.php';

$connection = connect($bd_config);
if (!$connection){
    header('Location: error.php');
} 

//$posts que tenga un where ourPosts == true y limit 2
$posts = getPosts($blog_confi['postbypage'],$connection);

require 'views/index-view.php';

?>