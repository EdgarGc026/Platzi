<?php 
require('admin/config.php');
require('functions.php');

$connection = Connection($database_config);
if (!$connection) {
    header('Location: error404.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])){
    $search = clearData($_GET['search']);
    $statement = $connection->prepare('SELECT * FROM articles WHERE title LIKE :search or body LIKE :search');
    
    $statement->execute(array(':search' => "%$search%"));
    $result = $statement->fetchAll();

    if(empty($result)){
        $title = 'Al parecer no hemos encontrado articulos con el titulo: ' .$search;
    }else{
        $title = 'Resultados de la busqueda: ' .$search;
    }
}else{
    header('Location: '.RUTA .'index.php');
}

require('views/search.view.php');
?>