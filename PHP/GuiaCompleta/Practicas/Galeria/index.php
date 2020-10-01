<?php 

require ('functions.php');
$pagePhoto = 8;

$page = (isset($_GET['page']) ? (int)$_GET['page'] : 1);
$home = ($page >1) ? $page * $pagePhoto - $pagePhoto : 0;

$connection = connection('galeria', 'root', '');

if (!$connection) {
    #Si hay algun error, que se termine la ejecucion de la db;
    die();
}

$statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM photos LIMIT $home, $pagePhoto");
$statement->execute();
$photos = $statement->fetchAll();

// Si no hay fotos, entonces redirigimos a una pagina de error
if(!$photos){
    header('Location: index.php');
}

// Para conocer el numero de pagina que tendremos
$statement = $connection->prepare("SELECT FOUND_ROWS() AS totalRows");
$statement->execute();
$totalPost = $statement->fetch()['totalRows'];

$totalPage = ($totalPost / $pagePhoto);
$totalPage = ceil($totalPage);


require('views/index.view.php');
?>