<?php 

function connection($database, $user, $password){

    try {
        $connection = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    } catch (PDOException $ex) {
        $ex->getMessage();

        return false;
    }
}

#Limpia y convierte datos como espacios en blanco, barras y caracteres
#retorna los datos limpios y convertidos en entidades html.
function clearData($data){
    //Se eliminan los espacios en blanco al inicio y final de la cadena
    $data = trim($data);

    // Quitamos las barras / escapando con comillas
    $data = stripslashes($data);

    //Evitar inyeccion de caracteres especiales
    $data = htmlspecialchars($data);
    return $data;
}


?>