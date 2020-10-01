<?php 
// incluir cabeceras
require('admin/config.php');
require('functions.php');

// crear conexion para traer los post
$connection = Connection($database_config);


if (!$connection) {
    header('Location: error404.php');
}

$post = getPost($blog_config['post_per_page'], $connection);

if (!$post) {
    header('Location: error404.php');
}

// echo actualPage();

require('views/index.view.php');
?>