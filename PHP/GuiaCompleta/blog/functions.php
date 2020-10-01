<?php 

// TODO:conexion a base de datos, 
// se crea una conexion con los parametros necesarios
function Connection($database_config){
    try{
        $connection = new PDO('mysql:host=localhost;dbname='.$database_config['database'], $database_config['user'], $database_config['pass']);
        return $connection;

    }catch(PDOException $ex){
        return false;
    }
}

// TODO:limpiar los datos, primero se quitan espacios
// luego se quitan los backslash (/ y \) de los inputs
// por ultimo se convierte los caracteres de html a texto plano
function clearData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}

// verficamos que exista alguna pagina. y verificamos en que
// pagina esta el usuario actualmente 
function actualPage(){
    return isset($_GET['page']) ? (int)$_GET['page'] : 1;
}

// Se obtienen los post de la bd y tambien se le dice al programa cuantos
// post se veran en pantalla (en este caso, se muestran 3) y se limita que se vean
// desde inicio (pagina actual) hasta los post por pagina
function getPost($post_per_page, $connection){
    $home =  (actualPage() > 1) ? (actualPage() * $post_per_page - $post_per_page) : 0;
    $statement = $connection->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $home, $post_per_page");
    $statement->execute();

    return $statement->fetchAll();
}


// Parte de la paginacion, donde se va trabajar con las paginas
// o cuantas paginas habra <1-2-3> etcetera.
function pagesNumber($post_per_page, $connection){
    $total_post = $connection->prepare('SELECT FOUND_ROWS() AS total');
    $total_post ->execute();
    $total_post = $total_post->fetch()['total'];
    $pages_number = ceil($total_post/$post_per_page);

    return $pages_number;
}

// guardar el id de los post de la url y se limpian para que no sean
// vulnerable a inyeccion de codigo especial.
function idArticle($id){
    return (int)clearData($id);
}

// Obtenenos los id de los post que hay en la bd
function getPostById($connection, $id){
    $resultSet = $connection->query("SELECT * FROM articles WHERE id = $id LIMIT 1");
    $resultSet = $resultSet->fetchAll();

    return ($resultSet) ?$resultSet :false;
}


// Aqui se le da formato al tiempo de los post. Para que tengan un
// bonito formato.
function dateTime($date){
    $timestamp = strtotime($date);
    $months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    $day = date('d', $timestamp);
    $month = date('m', $timestamp)-1;
    $year = date('Y', $timestamp);

    $date = "$day de ".$months[$month]." del $year";
    return $date;

}

// 
function checkSession(){
    if(!isset($_SESSION['admin'])){
        header('Location:'.RUTA);
    }
}

?>