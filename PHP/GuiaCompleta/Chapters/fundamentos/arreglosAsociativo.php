<?php 

// Crear una idea de como usar los arreglos asociativos
/* El arreglo student debe tener:
    Nombre
    Edad
    Telefono
    Materias
 */
$student = array(
    'Nombre'   => 'Pancho Perez',
    'Edad'     => 25,
    'Telefono' => 2288553124, 
    'Materias' => 'Ingles',
);

$student['Nombre'] = 'Nuno Perez';
$student['Edad'] = 18;

echo 'Valores del arreglo: '; 
 echo '<br>'.$student['Nombre'];
 echo '<br>'.$student['Edad'];
 echo '<br>'.$student['Telefono'];
 echo '<br>'.$student['Materias'];

?>