<?php 
    require('config/Connection.php');
    $connection = Connection();

    if(!$connection){
        $error = "Hubo un problema en la edicion de datos";
    }

    $statement = $connection->prepare('SELECT * FROM tasks');
    $statement->execute();

    return $statement->fetchAll();


    require('views/index.view.php');
?>