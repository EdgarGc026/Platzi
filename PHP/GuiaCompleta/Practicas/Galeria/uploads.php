<?php

require('functions.php');
// $errors = '';


$connection = connection('galeria', 'root', '');
if (!$connection) {
    
    die();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' AND !empty($_FILES)) {
    // getimagesize nos retorna un arreglo de propiedades de la imagen,
    // el @ nos indica si es o no una imagen
    $check = @getimagesize($_FILES['photo']['tmp_name']);
    
    if ($check !== false) {
        $storage = 'img/';
        $upload = $storage .$_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $upload);

        $statement = $connection->prepare(
                'INSERT INTO photos (title, photo, description) 
                VALUES (:title, :photo, :description)'
            );
            
        $statement->execute(array(
            ':title' => $_POST['title'], 
            ':photo' => $_FILES['photo']['name'], 
            ':description' => $_POST['description']
        ));
        
        header('Location: index.php');
    }else{
        $errors = "El archivo no es una imagen, o es muy pesado"; 
    }
}

require('views/uploads.view.php');

?>