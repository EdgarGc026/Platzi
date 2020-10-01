<?php 
require('functions.php');

$conection = connection('galeria', 'root', '');

if (!$conection) {
    #Si llega a falla, todo se acaba
    die();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
	header('Location: index.php');
}

//  Traemos la foto
$statement = $conection->prepare('SELECT * FROM photos WHERE id = :id');
$statement->execute(array('id' => $id));

$photo = $statement->fetch();

if (!$photo) {
	header('Location: index.php');
}

require('views/photo.view.php');

?>