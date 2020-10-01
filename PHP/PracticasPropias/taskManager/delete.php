<?php 
require('config/Connection.php');
$connection = Connection();

if(!$connection){ 
    echo "Algo paso a la hora de eliminar";
}

$id = clearData($_GET['id']);
if(!$id){
    header('Location: index.php');
}
   $statement = $connection->prepare('DELETE FROM tasks WHERE id = :id');
   $statement->execute(['id' => $id]);

   $_SESSION['message'] = 'Tarea eliminada correctamente';
   $_SESSION['message_type'] = 'danger';

   header('Location: index.php');

require('views/index.view.php');
?>