<?php 

/* $amiko = ['telefono' =>  283112394, 'edad' =>24, 'mascota' => 'gato'] ;

extract($amiko);

echo $telefono .'<br>';
echo $edad .'<br>';
echo $mascota .'<br>'; */

/* $week = ['Lunes','Martes', 'Miercoles','Jueves', 'Viernes','Sabado', 'Domingo'];
// array_pop($week);

$lastDay =array_pop($week);

foreach($week as $day){
    echo $day. '<br>';
}

echo $lastDay; */

$week = ['Lunes','Martes', 'Miercoles','Jueves', 'Viernes','Sabado', 'Domingo'];
// echo join('<br>',$ord);
//  $ord = sort($week);

// $tam = count($week);
// echo '<br>'.'La semana tiene: ' .$tam .' dias';

$weekReverse =array_reverse($week);
echo join('<br>',$weekReverse);
?>