<?php session_start();

require('config.php');
require('../functions.php');

// Verificando y comprobando que hay sesion activa.
checkSession();
$connection = Connection($database_config);
if (!$connection) {
    header('Location: error404.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = clearData($_POST['title']);
    $body = clearData($_POST['body']);
    $images_upload = $_POST['images-save'];
    $images = $_FILES['images'];
    $excerpt = clearData($_POST['excerpt']);
    $id = clearData($_POST['id']);

    if (empty($images['name'])) {
       $images = $images_upload;
    }else{
        $file_upload = '../'.$blog_config['folder_images'] .$_FILES['images']['name'];
        move_uploaded_file($_FILES['images']['tmp_name'], $file_upload);
        $images = $_FILES['images']['name'];
    }

    $statement = $connection->prepare(
        'UPDATE articles SET title = :title, body = :body, excerpt = :excerpt, images = :images WHERE id = :id'
    );

    $statement->execute([
            'title' => $title,
            'body' => $body,
            'images' => $images,
            'excerpt' => $excerpt,
            'id' => $id
        ]
    );
    var_dump($statement);
    header('Location: ' .RUTA .'admin');

}else{
    $id_article = idArticle($_GET['id']);

    if (empty($id_article)) {
        header('Location: ' .RUTA .'admin');
    }
    $post = getPostById($connection, $id_article);

    if(!$post){
        header('Location:' .RUTA .'admin');
    }
    $post = $post[0];
}

require('../views/edit.view.php');
?>