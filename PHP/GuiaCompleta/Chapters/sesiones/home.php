<?php 
session_start(); 

if($_SESSION){
    $name = $_SESSION['name'];
    echo "<h1> Hola, $name </h1>";
}else{
    echo "No has iniciado sesion";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="close.php">Cerrar sesion</a>
</body>
</html>