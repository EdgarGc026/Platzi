<?php session_start();

// Index del administrador
require('config.php');
require('../functions.php');

// Creamos una conexion a la bd
$connection = Connection($database_config);

//Se comprueba la sesion
checkSession();
if(!$connection){
    header('Location: ../error404.php');
}

$posts = getPost($blog_config['post_per_page'], $connection);


require('../views/adminIndex.view.php');
?>