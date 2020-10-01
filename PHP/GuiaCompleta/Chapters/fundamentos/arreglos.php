<?php 

// version 1
$week = array('Lunes','Martes','Miercoles','Jueves', 'Viernes');
$week[5] = 'Sabado';
$week[6] = 'Domingo';

$mix = array(1, 2, 3, 4, 'cinco', 'seis', 'siete', 7.5);


// para acceder a esto:
echo "<br> Los dias de la semana son:";
 echo '<br>' .$week[0];
 echo '<br>' .$week[1];
 echo '<br>' .$week[2];
 echo '<br>' .$week[3];
 echo '<br>' .$week[4];
 echo '<br>' .$week[5];
 echo '<br>' .$week[6];

 echo '<br>';

echo "<br> El mix contiene:";
 echo '<br>' .$mix[0];
 echo '<br>' .$mix[1];
 echo '<br>' .$mix[2];
 echo '<br>' .$mix[3];
 echo '<br>' .$mix[4];
 echo '<br>' .$mix[5];
 echo '<br>' .$mix[6];
 echo '<br>' .$mix[7];

// version 2
$semana = ['Lunes','Martes','Miercoles','Jueves', 'Viernes', 'Sabado', 'Domingo'];
$tutifruti = [1, 2, 3, 4, 'cinco', 'seis', 'siete', 7.5];
echo '<br>';

echo "<br> arreglo semana son:";
 echo '<br>' .$semana[0];
 echo '<br>' .$semana[1];
 echo '<br>' .$semana[2];
 echo '<br>' .$semana[3];
 echo '<br>' .$semana[4];
 echo '<br>' .$semana[5];
 echo '<br>' .$semana[6];


 echo "<br> <br> Arreglo tutifruti:";
 echo '<br>' .$tutifruti[0];
 echo '<br>' .$tutifruti[1];
 echo '<br>' .$tutifruti[2];
 echo '<br>' .$tutifruti[3];
 echo '<br>' .$tutifruti[4];
 echo '<br>' .$tutifruti[5];
 echo '<br>' .$tutifruti[6];
 echo '<br>' .$tutifruti[7];

?>