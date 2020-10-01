<?php 
$id = $_GET['id'];
    try {
        $connection = new PDO('mysql:host=localhost;dbname=guiacompleta', 'root', '');
        echo "Conexion establecida";
        
        // Prepared Statement
        $connection->prepare('select * from users where id = :id or :id2');
        $statement->execute(array(':id' => $id));
        $result = $statement->fetchAll();
        print_r($result);
        
    } catch (PDOException $error) {
        echo "Error: " .$error->getMessage();
    }

?>