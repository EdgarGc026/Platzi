<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Mi Increíble Galería en PHP</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1 class="title">Foto: <?php if(!empty($photo['title'])){ echo $photo['title']; }else{ echo $photo['photo']; } ?></h1>
		</div>
	</header>

	<div class="container">
		<div class="photo">
			<img src="img/<?php echo $photo['photo']; ?>" alt="">
			<p class="text"><?php echo $photo['description']; ?></p>
			<a class="back" href="index.php"><i class="fa fa-long-arrow-left"></i>Regresar</a>
		</div>
	</div>

	<footer>
        <p class="copyright">Galeria de prueba</p>
	</footer>
</body>
</html>