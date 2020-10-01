<?php 
session_start();
$errors = '';

if(isset($_SESSION['user'])){
    header('Location: content.php');
}

// cadena no tenga chars extraños
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user =  filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    try {
        $connection = new PDO("mysql:host=localhost;dbname=loginpdo", "root", "");
    } catch (PDOException $ex) {
        echo "Error: " .$ex->getMessage();
    }
    
    $statement = $connection->prepare('SELECT * FROM users WHERE name = :name AND password = :password');
    $statement->execute(array(':name' => $user, ':password' => $password));

    $resultSet = $statement->fetch();
    // var_dump($resultSet);
    if ($resultSet != false) {
        $_SESSION['user'] = $user;
        header('Location: content.php');
    }else{
        $errors .= '<li>Datos incorrectos</li>';
    }
}

require('views/login.view.php');

?>