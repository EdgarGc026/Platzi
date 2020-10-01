<?php 
 /* Variables del servidor mas importante */

//  Saber la dir ip del servidor
echo '<h1>' .$_SERVER['SERVER_ADDR'] .'</h1> <br />';
// El nombre del servidor web
echo '<h1>' .$_SERVER['SERVER_NAME'] .'</h1> <br />';
// El software que usa el servidor web
echo '<h1>' .$_SERVER['SERVER_SOFTWARE'] .'</h1> <br />';
// Que navegador estas usando
echo '<h1>' .$_SERVER['HTTP_USER_AGENT'] .'</h1> <br />';
// La direccion ip del servidor a que accedes
echo '<h1>' .$_SERVER['REMOTE_ADDR'] .'</h1> <br />';

?>