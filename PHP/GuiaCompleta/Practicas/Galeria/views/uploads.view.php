<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Galería en PHP</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1 class="title">Subir Foto</h1>
		</div>
	</header>

	<div class="container">
		<form class="forms" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
			<label for="photo">Seleciona tu foto</label>
			<input type="file" name="photo" id="photo">

			<label for="title">Titulo de la foto</label>
			<input type="text" name="title" id="title">

			<label for="text">Descripcion:</label>
			<textarea type="text" name="description" id="description" placeholder="Ingresa una descripcion de la imagen"></textarea>

		<?php if (isset($errors)): ?>
				<p class="error"><?php echo $errors; ?></p>
			<?php endif; ?> 

			<input class="submit" type="submit" value="Subir Foto">

		</form>
	</div>

	<footer>
	<p class="copyright"><a href="index.php">Regresar a Inicio</a></p>
	</footer>
</body>
</html>