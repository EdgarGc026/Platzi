<?php 

$month = 'Abril';


    switch($month){
        case 'Enero':
            echo "<h1>Estas en el mes correcto</h1>";
    break;
        case 'Febrero':
            echo "<h1>Estas en el mes correcto</h1>";
    break;
        case 'Marzo':
            echo "<h1>Estas en el mes correcto</h1>";
    break;
        case 'Abril':
            echo "<h1>Estas en el mes correcto</h1>";
    break;
        default:
            echo 'No se encontro el mes';
    break;
    }

    if ($month == 'Abril') {
        echo "<h1>Feliz dia del niño</h1>";
    }else{
        echo "<h1>Feliz...Cumple(?)</h1>";
    }
?>