<?php
// Un ejemplo puede ser este
$a = 1;
$b = 2;
$c = 3;

$resultado = ($a + $b)*$c;
echo "Ejemplo 1:". '<br>';
echo($resultado);
echo '<br>' . '<br>';


/**
* Calcula el resultado de 32+3 y 3(2+3). 
*/
// Primer resultado
$a = 32;
$b = 3;
$primero = $a + $b;
echo "Ejemplo 2:". '<br>';
echo($primero);
echo '<br>' . '<br>';

$c = 3;
$d = 2;
$e = 3;
$segundo = $c*($d + $e);
echo "Ejemplo 3:". '<br>';
echo($segundo);
echo '<br>' . '<br>';


/**
 * Tomando en cuenta que tenemos una variable llamada $valor.
 * ¿Cómo sería un condicional para las siguientes opciones?
 * 
 * $valor es mayor que 5 pero menor que 10 [*]
 * $valor es mayor o igual a 0 pero menor o igual a 20 [*]
 * $valor es igual a “10” asegurando que el tipo de dato sea cadena [*]
 * $valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15
*/
$valor = 4;
echo "Obtener el tipo del dato: " . '<br>';

gettype($valor) . '<br>';
is_string($valor) . '<br>';
//echo var_dump(is_string($valor) . '<br>');

if ($valor > 5 and $valor < 10) {
    echo "Primer mensaje" . '<br>';
    echo '<br>' . ' ' . $valor. 'es mayor a 5 pero menor que 10 ' . '<br>';
}

if ($valor >= 0 and $valor <= 20) {
    echo "Segundo mensaje";
    echo '<br>' . $valor. ' es mayor o igual a 0 pero menor o igual que 20' . '<br>';
}
if ($valor == '10' and is_string($valor) !=1 ) {
    echo "Tercer mensaje";
    echo '<br>' . $valor . ' es igual a 10 y damos por sentado que es string';
}
if ($valor > 0 and $valor < 5 || $valor > 10 and $valor < 15) {
    echo "Cuarto mensaje";
    echo '<br>' . $valor . ' es mayor a 0 pero menor a 5 ademas o es mayor a 10 pero menor a 15' . '<br>';
}

?>