<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2>Inicio de sesion</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="forms" id="forms">
                    <input type="text" name="user" id="user" class="form-group" placeholder="Usuario">
                    <input type="password" name="password" id="password" class="form-group" placeholder="Contraseña">
                    <input type="submit" class="btn btn-success" value="Enviar" onclick="">
                </form>
            </div>
        </div>
    </div>

</body>
</html>