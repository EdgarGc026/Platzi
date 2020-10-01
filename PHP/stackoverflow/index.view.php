<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <h2>Formulario nombre y apellido</h2>
        <label for="name">Nombre</label>
        <input type="text" name="name" placeholder="name">
        
        <label for="lastname">Apellido</label>
        <input type="text" name="lastname" placeholder="Apellido">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>