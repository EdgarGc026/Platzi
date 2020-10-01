<?php 
/* 
for ($i=0; $i < 10; $i++) { 
    echo "[$i] Hola<br>";
} */

$fruits = ['Fresas', 'Kiwis', 'Manzanas', 'Melones', 'Sandias'];
$tam = count($fruits);

echo '<span>Las frutas son:</span>';
for($i=0; $i<$tam; $i++){
    echo "<br>[$i] $fruits[$i]";
}
echo "<br><br>Imprime 10 numeros";
for($i=0; $i<10; $i++){
    echo "<br>$i";
}

?>