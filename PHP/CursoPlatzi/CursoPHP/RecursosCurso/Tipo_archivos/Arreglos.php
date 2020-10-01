<?php 
// Ejecicio para imprimir todo esto

// Creacion de los arreglos
$arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',
    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo',
];
echo '<br>';

echo "Imprimiendo la oracion" . '<br>' . '<br>';
echo $arreglo['keyStr1'] . ', ' . $arreglo[0] . ', ' . $arreglo[1] . ', ' .$arreglo['keyStr2'];
echo  '<br>' .'decirlo al revés lo dudo.' . '<br>';
echo $arreglo[2] . ', ' . $arreglo[1] . ', ' . $arreglo['keyStr2'] . ', ' . $arreglo[0] . ', ' . $arreglo['keyStr1'];
echo '<br>' . "¡Qué trabajo me ha costado!";
echo '<br>';

// Segundo ejercicio
echo '<br>'. "uso del foreach" . '<br>';
$arreglo2 = [
    'Mexico' => [
        'Monterrey', 
        'Queretaro',
        'Guadalajara'
    ],
    'Colombia' => [
        'Bogota',
        'Cartagena',
        'Medellin'
    ],
    'Argentina' => [
        'Rio Blanco', 
        'La Plata',
        'Fuerte Apache'
    ],
    'Brasil' => [
        'Sopa', 
        'Do Macaco',
        'Uma Delicia'
    ],
    'Estados Unidos' => [
        'Nueva Orleans', 
        'Nueva Jersey',
        'Texas'
    ]
];

foreach ($arreglo2 as $llave => $valor) {
   echo '<br>' . $llave .':' . '<br>';
   foreach($valor as $valor){
       echo ' |' . $valor . '| ';
   }
}


// Tercer ejercicio

echo '<br>' . '<br>';
echo "Ordenar valores en un arreglo";
echo '<br>' . '<br>';
$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];


// Opcion 1
    foreach($valores as $valor){
        echo($valor) . ' |';
    }

    // Paso 2, Mostrar los maximos en pantalla
    echo '<br>' . '<br>';
    sort($valores);
    echo "Mostrar los 3 minimos: ";
    for ($i = 0; $i <= 2; $i++) {
        echo '|' . ' ' . $valores[$i] . ' ' . '|';
    }

    echo '<br>' . '<br>';

    echo "Mostrar los 3 maximos";
    $valores2 = array_reverse($valores);
    
    for ($i=0; $i <=2 ; $i++) { 
        echo '|' . ' ' . $valores2[$i] . ' ' . '|';
    }
    
// Opcion 2
// echo '<br>' . '<br>';
// asort($valores, 1);
// var_export($valores);
// echo '<br>' . '<br>';

// arsort($valores, 1);
// var_export($valores)

?>
