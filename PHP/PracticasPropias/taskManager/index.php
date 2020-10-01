<?php
require('config/Connection.php');
$connection = Connection();


if (!$connection) {
   echo "Fallo en la Base de datos, por favor espere";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $description = clearData($_POST['description']);
   
   if(!empty($description)){
      $statement = $connection->prepare('INSERT INTO tasks(description) VALUES (:description)');
      $statement->execute([
         ':description' => $description
      ]);
      $_SESSION['message'] = 'Tarea agregada correctamente';
      $_SESSION['message_type'] = 'success';
   }
}

$task = getTask($connection);

require('views/index.view.php');
