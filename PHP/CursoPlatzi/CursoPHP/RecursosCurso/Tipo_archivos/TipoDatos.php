<?php 
// Valores booleanos
$si = true;
$no = false;

//var_dump($si);
echo 'Valores Bool' . '<br>'; 
echo $si . '<br>';
var_dump($si);

echo $no . '<br>';
var_dump($no);
echo '<br>' . '----------------' . '<br>';

//Integer
$negativo = -123;
$positivo = 0;
$entero = 7763;

echo 'Valores Entero ' . '<br>'; 
echo $negativo . '<br>';
echo $positivo . '<br>';
echo $entero . '<br>'; 
echo '----------------' . '<br>';

// float o dobles
$float = 12.24;
$double = 1.5e3;
$doubles = 7E-10;

echo 'Valores float o doubles' . '<br>';
echo $float . '<br>';
echo $double . '<br>';
echo $doubles . '<br>'; 
echo '----------------' . '<br>';

// Valores string

$cadena1 = "Hola";
$cadena2 = 'Muudo';

echo $cadena1 . '<br>';
echo $cadena2 . '<br>';
echo '----------------' . '<br>';


// Arrays
$arreglo1 = array(
    "Curso1" => "C",
    "Curso2" => "C++",
);

$arreglo2 = [
    "curso1" => "C++",
    "Curso2" => "Java",
];

// Indices numericos
$arreglo3 = [
    "Python",
    "Javascript",
];

$arreglo4 = [
    1 => "Edgar",
    "1" => "Ramón",
    2.1 => "Gonzalez",
    true => "Contreras",
];

echo "Arreglo 1: ";
var_dump($arreglo1);
echo '<br>' . '<br>';

echo "Arreglo 2: ";
var_dump($arreglo2);
echo '<br>' . '<br>';

echo "Arreglo 3: ";
var_dump($arreglo3);
echo '<br>' . '<br>';

echo "Arreglo 4: ";
var_dump($arreglo4);

// Representar un object (objecto)

class Car{
    function move(){
        echo '<br>' . '<br>';
        echo "Echate pátras";
    }
}
$miCarro = new Car;
$miCarro->move();

// Callable

//Variable que guarda un callable
$llamar_arreglo4 = function(array $arreglo4){
    if (count($arreglo4) == 0) {
        return null;
    }
    return $arreglo4[0];
};

//Creamos el arreglo
$valores = [3,2,1,];

echo '<br>' . '<br>';
echo $llamar_arreglo4($valores);
echo '<br>' . '<br>';

// Referencia del array en funciones

//funcion donde sacas el array (o esta declarado)
function getArray(){
    return array(1, 2, 3);
}

//Opcion1
$getFirstElement = getArray()[0];
echo $getFirstElement;
echo '<br>' . '<br>';

//opcion2
$temporal = getArray();
$getSecondElement = $temporal[2];
echo $getSecondElement;
echo '<br>' . '<br>';

//opcion3 

list(, $getThirdElement) = getArray();
echo $getThirdElement;
//var_dump($getThirdElement);
echo '<br>' . '<br>';
?>