<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Sesion</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Iniciar sesion</h1>
        <hr class="border">
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="forms" name="login">
            <div class="form-group">
                <i class="icon left fas fa-user"></i><input type="text" name="user" class="user" placeholder="Usuario">
            </div>
            
            <div class="form-group">
                <i class="icon left fas fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
               <i class="submit-btn fas fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errors)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errors; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <p class="text-register">
            ¿Aun no tienes cuenta? 
            <a href="register.php">Registrate</a>
        </p>
    </div>

    
</body>
</html>