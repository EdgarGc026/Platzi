<?php 

/* 
    1 Si el valor de la izquiera es mayor al de la derecha
    0 Si el valor de ambos son iguales
    -1 Si el valor de la derecha es mayor que el de la izquierda

*/
/* 
echo 1 <=> 1;

echo '<br>';
echo 1 <=> 10; */

/* $arreglo = [1,2,3,6,8];
$ordenada =sort($arreglo);
echo implode(' - ', $arreglo); */

$arreglo = [1,2,3,6,8];
/* function compare($a, $b){
    if($a == $b){
        return 0;
    }elseif($a > $b){
        return 1;
    }else{
        return -1;
    }
} */

function compare($a, $b){
    return $a <=> $b;
}
usort($arreglo, 'compare');
echo implode(' - ', $arreglo);


?>