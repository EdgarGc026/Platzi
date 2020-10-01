<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Galeria con PHP</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1 class="title">Mi Galeria con PHP y MYSQL</h1>
        </div>
    </header>

    <div class="photos">
        <div class="container">
            <?php foreach($photos as $photo): ?>
                <div class="thumb">
                    <a href="photo.php?id=<?php echo $photo['id']; ?>">
                        <img src="img/<?php echo $photo['photo']; ?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
            

            <div class="pagination">
                <!-- Si el usuario esta en la pagina principal entonces no mostramos el enlace a una pagina anterior -->
                <?php if ($page != 1): ?>
                    <a href="index.php?page=<?php echo $page - 1; ?>" class="left"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif; ?>

                <?php if($totalPage != $page): ?>
                    <a href="index.php?page=<?php echo $page + 1; ?>" class="right"><i class="fa fa-long-arrow-right"></i> Pagina Siguiente</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

<footer>

    <p class="copyright"><a href="uploads.php">Cargar archivo</a></p>
</footer>

</html>