<?php 


/* //Alterar
$text = "PHP es UN lEnguaje";

//todo en mayuscula
echo strtoupper($text) . "</br>";

//todo en minuscula
echo strtolower($text) ."</br>";

//La primera letra en mayuscula
echo ucfirst($text) ."</br>";

//primer elemento en minuscula
echo lcfirst($text);

// Reemplazar por un slug
$slug = str_replace(' ', '-', $text);
echo strtolower($slug) ."</br>";


// Modificacion, agregando caracteres.
//PAD_BOTH agrega en ambos lados, izquierda a la derecha.
$code = 39;
echo str_pad($code, 7, '$', STR_PAD_BOTH) . "</br>";
echo str_pad($code, 7, '$', STR_PAD_LEFT) . "</br>";
echo str_pad($code, 7, '$', STR_PAD_RIGHT) . "</br>";

//quitar todo lo que tenga que ver con etiquetas html
echo strip_tags($tags); */

//elementos monobyte y multibyte
$text = "PHP es UN lEnguaje, año 2020, programacion";
//echo strtoupper($text); //monobyte
echo mb_strtoupper($text); //multibyte
?>