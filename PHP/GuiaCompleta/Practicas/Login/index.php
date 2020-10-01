<?php session_start();

// Comprobamos tenga sesion, si no entonces redirigimos y MATAMOS LA EJECUCION DE LA PAGINA.
if(isset($_SESSION['user'])) {
	header('Location: content.php');
	die();
} else {
	// Enviamos al usuario al formulario de registro
	header('Location: register.php');
}

?>