<?php 

// phpinfo();
declare(strict_types=1);

function cuadrado(int $num){

    return $num*$num;
}

// $num = 2;
// $num = 'Edgar';
$num = 4;
echo 'El cuadrado de ' .$num .' es ' .cuadrado($num);