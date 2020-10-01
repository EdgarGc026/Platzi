<?php 

$amikos = [
    ['Daniel', 22], //0
    ['Luis', 27],  //1
    ['Nermi', 23],  //2
    ['Ruben', 23],  //3
];

echo '<br>'. 'Mi amigo se llama: '. $amikos[0][0];
echo '<br>' .'Y su edad es de:' .$amikos[0][1]. '<br>';

echo '<br>'. 'Mi amigo se llama: '. $amikos[1][0];
echo '<br>' .'Y su edad es de:' .$amikos[1][1]. '<br>';

echo '<br>'. 'Mi amigo se llama: '. $amikos[2][0];
echo '<br>' .'Y su edad es de:' .$amikos[2][1]. '<br>';

echo '<br>'. 'Mi amigo se llama: '. $amikos[3][0];
echo '<br>' .'Y su edad es de:' .$amikos[3][1]. '<br>';


$food = array(
    array('China', 'Tallarines'),
    array('Italiana', 'Albondigas'),
    array('Mexicana', 'Tacos'),
    array('Gringa', 'Hambuerguesas')
);

echo '<br>'. 'La cocina es: '. $food[0][0];
echo '<br>' .'Y el plato estrella es:' .$food[0][1]. '<br>';

echo '<br>'. 'La cocina es: '. $food[1][0];
echo '<br>' .'Y el plato estrella es:' .$food[1][1]. '<br>';

echo '<br>'. 'La cocina es: '. $food[2][0];
echo '<br>' .'Y el plato estrella es:' .$food[2][1]. '<br>';

echo '<br>'. 'La cocina es: '. $food[3][0];
echo '<br>' .'Y el plato estrella es:' .$food[3][1]. '<br>';



?>