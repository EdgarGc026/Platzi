<?php 
// Tus variables pueden tomar cualquier tipo de dato.
$name = 'Edgar';
$lastName = 'Gonzalez';
$fullName = "$name $lastName";
$num1 = 10;
$num2 = 5;
$char = 'c';
$decimalNum = 2.5;

echo 'Tu nombre es: ' .$fullName;
echo "<br> Tu nombre es: $fullName";

echo '<br> '. 'tu char es: ' . $char;

echo "<br> Tus numeros elegidos son $num1 y $num2";

echo "<br> El numero decimal es: $decimalNum";

?>