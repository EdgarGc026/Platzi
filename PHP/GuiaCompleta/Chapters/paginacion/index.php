<?php 
try{
$connection = new PDO('mysql:host=localhost;dbname=guiacompleta','root','');

// Establecemos el numero de pagina en la que el usuario se encuentra.
# Esto lo hacemos por el metodo GET, si no hay ningun valor entonces le asignamos la pagina 1.
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Establecemos cuantos post por pagina queremos cargar.
$posts = 5;

// 10 -5
// Revisamos desde que articulo vamos a cargar, dependiendo de la pagina en la que se encuentre el usuario.
# Comprobamos si la pagina en la que esta es mayor a 1, sino entonces cargamos desde el articulo 0.
# Si la pagina es mayor a 1 entonces hacemos un calculo para saber desde que post cargaremos.
$home = ($page > 1) ? ($page * $posts - $posts) : 0;

// creacion de la prepared statement
$article = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $home, $posts");
$article->execute();
$article = $article->fetchAll();

if(!$article){
    header('Location: index.php');
}
// Calculamos el total de articulos, para despues conocer el numero de paginas de la paginacion.
$totalArticle = $connection->query("SELECT FOUND_ROWS() AS total");
$totalArticle = $totalArticle->fetch()['total'];

// Calculamos el numero de paginas que tendra la paginacion.
# Para esto dividimos el total de articulos entre los post por pagina
$numPage = ceil($totalArticle / $posts); //redondea hacia arriba
// echo $numPage;

}catch(PDOException $error){
    echo "Error: " .$error->getMessage();
    die();
}

require('index.view.php');
?>