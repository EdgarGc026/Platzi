<?php 
    $errors = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(!empty($name)){
        /* $name = trim($name); //Nos quita los espacios al inicio y finall
        $name = htmlspecialchars($name); //convierte los chars especiales a html
        $name = stripslashes($name); //convierte a string */
        $name = filter_var($name, FILTER_SANITIZE_STRING); //tomas el contenido de la var y aplicamos un filtro
                                                            //El cual remueve todo los signos que no necesitamos

        echo "El nombre es: $name <br/>";
    }else{
        $errors .= "Por favor ingresa un nombre, no seas malo :( <br/>";
    }

    if(!empty($email)){
        
        $email =filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= "Por favor ingresa un correo valido <br/>";
        }else{
            echo "Tu correo es $email";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Form</title>

    <style>
        .error{
            color: red;
        }


    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="name" placeholder="nombre">
        <input type="text" name="email" placeholder="correo">
        <?php  if(!empty($errors)): ?>
            <div class="error">
                <?php echo $errors; ?>
            </div>
        <?php  endif;?>
        <input type="submit" name="submit">
    </form>
</body>
</html>