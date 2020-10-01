<?php session_start();

require('config.php');
require('../functions.php');

// checamos si la sesion est activada:
checkSession();
$connection = Connection($database_config);
if(!$connection){
    header('Location: ../error404.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = clearData($_POST['title']);
    $body = $_POST['body'];
    $images = $_FILES['images']['tmp_name'];
    $excerpt = clearData($_POST['excerpt']);
 
    $upload = '../'.$blog_config['folder_images'] .$_FILES['images']['name'];
    move_uploaded_file($images, $upload);

    $statement = $connection->prepare('INSERT INTO articles (id, title, body, images, excerpt) VALUES (null, :title, :body, :images, :excerpt)');
    $statement->execute(array(
        ':title' => $title,
        ':body' => $body,
        ':images' => $_FILES['images']['name'],
        ':excerpt' => $excerpt
    ));
    header('Location: ' .RUTA .'admin');

    var_dump($statement);
}

require('../views/new.view.php');


?>