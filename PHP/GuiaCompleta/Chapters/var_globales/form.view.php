<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables ||GET & POST</title>
</head>
<body>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="GET">
        <p>
            <label for="name">Nombre</label>
            <input type="text" name="name" placeholder="Nombre">
        </p>
        
        <p>
            <label for="name">Apellido</label>
            <input type="text" name="last" placeholder="Apellido">
        </p>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>