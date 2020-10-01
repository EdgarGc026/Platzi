<?php 
session_start(); 
session_destroy();

header('Location: http://localhost/PHP/GuiaCompleta/sesiones/index.php');
?>