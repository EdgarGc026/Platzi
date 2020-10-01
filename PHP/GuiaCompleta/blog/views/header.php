<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/style.css">
    <title>Blog || Supremo</title>
</head>
<body>

    <header>
        <div class="container">
            <div class="logo left">
                <p><a href="<?php echo RUTA; ?>">Blog Supremo</a></p>
            </div>

            <div class="right">
                <form name="search" class="search" action="<?php echo RUTA;?>search.php" method="GET">
                    <input type="text" name="search" placeholder="Buscar">
                    <button type="submit" class="btn icon fas fa-search"></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li><a href="#"><small>Twitter<i class="icon fab fa-twitter"></i></small></a></li>
                        <!-- <li><a href="#"><small>Login<i class="icon fas fa-user"></i></small></a></li> -->
                        <li><a href="#"><small>Contacto<i class="icon fa fa-envelope"></i></small></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>