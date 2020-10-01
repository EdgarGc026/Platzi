<?php 

//echo pathinfo('docs.txt', PATHINFO_FILENAME);
/* 
   , PATHINFO_DIRNAME
   , PATHINFO_BASENAME
   , PATHINFO_EXTENSION
   , PATHINFO_FILENAME 
*/

/* $result = glob('*.php'); //Checar todo los archivos que todos tenemos
print_r($result);

$result = glob('rutasCarpetas/*.{php,html,txt}', GLOB_BRACE); //Checar todo los archivos que tienen esas extensiones
print_r($result); */

// echo basename('carpeta1/carpeta2/archivo.php', 'php');

echo dirname('carpeta1/carpeta2/archivo.php'); //Devuelve la ruta y elimina el archivo

?>
