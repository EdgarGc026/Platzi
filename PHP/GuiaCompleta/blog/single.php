<?php 
require('admin/config.php');
require('functions.php');

$connection = Connection($database_config);
$id_article = idArticle($_GET['id']);
var_dump($id_article);

if (!$connection) {
    header('Location: error404.php');
}

if(empty($id_article)){
    header('Location: index.php');
}

$post = getPostById($connection, $id_article);
if (!$post) {
    header('Location: index.php');
}
$post = $post[0];

require('views/single.view.php');
?>