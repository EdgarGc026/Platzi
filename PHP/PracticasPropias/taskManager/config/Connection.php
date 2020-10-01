<?php 
    function Connection(){
        try {
            // Creando la conexion
            $connection = new PDO('mysql:host=localhost;dbname=task_manager', 'root', 'root');
            return $connection;

        } catch (PDOException $ex) {
            return false;
        }
    }

    // Se limpian los caracteres para que no haya problema
function clearData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}

function getTask($connection){
    $statement = $connection->prepare('SELECT * FROM tasks');
    $statement->execute();

    return $statement->fetchAll();
}
