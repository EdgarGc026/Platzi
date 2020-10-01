<?php 
session_start();

// TODO: Verificar que la sesion se haya creado
if(isset($_SESSION['user'])){
    header('Location: index.php');
}

// Si ya esta verificada la sesion, checar que los datos que se enviaron.
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = filter_var(strtolower($_POST['name']), FILTER_SANITIZE_STRING); 
    $password = $_POST['password'];
    $passwordVerify = $_POST['passwordVerify'];

    // 

    $errors = '';
    // Checamos que ninguno de los campos enviandos este vacio
    if(empty($user) or empty($password) or empty($passwordVerify)){
        $errors .= '<li>Por favor rellena todos los campos</li>';
    }else{
        // Si no lo estan, creamos una conexion a bd y con ello los agregamos
        try{
            $connection = new PDO("mysql:host=localhost;dbname=loginpdo", "root", "");
        }catch(PDOException $ex){
            echo "Errors: " .$ex->getMessage();
        }

        $statement = $connection->prepare('SELECT * FROM users WHERE name = :name LIMIT 1');
        $statement->execute(array(':name' => $user));
        $resultSet = $statement->fetch();

        // En caso de agregar uno que ya este en la lista, generar este error
       if($resultSet != false){
           $errors .= '<li>El nombre de usuario ya existe</li>';
       }

        //hashear la contraseña
        $password = hash('sha512', $password);
        $passwordVerify = hash('sha512', $passwordVerify);
        // echo "$user .$password .$passwordVerify";

        // Verificar que las contraseñas no sean iguales
        if($password != $passwordVerify){
            $errors .= '<li>Has ingresado contraseñas diferentes</li>';
        }
    }

    // 
    if($errors == ''){
        $statement = $connection->prepare('INSERT INTO users(id, name, password) VALUES (null, :name, :password)');
        $statement->execute(array(
            ':name' => $user, 
            ':password' => $password
        ));

        header('Location: login.php');
    }
}



require('views/register.view.php');

?>