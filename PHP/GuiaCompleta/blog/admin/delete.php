<?php session_start();

require('config.php');
require('../functions.php');

// checamos si la sesion est activada:
checkSession();
$connection = Connection($database_config);
if(!$connection){
    header('Location: ../error404.php');
}

$id = clearData($_GET['id']);
if (!$id) {
    header('Location: '.RUTA .'admin');
    var_dump($id);
}

$statement = $connection->prepare('DELETE FROM articles WHERE id = :id');
$statement->execute(array('id' => $id));
var_dump($statement);
header('Location: ' .RUTA .'admin');


require('../views/new.view.php');
?>