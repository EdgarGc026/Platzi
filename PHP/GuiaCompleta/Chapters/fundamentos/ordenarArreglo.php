<?php 

$months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
sort($months);
//rsort($months);

// arreglo de numeros
$nums = array(5,2,1,7,6,9,0);
sort($nums);


?>

<html>
    <body>
        <h1>Ordenar arreglo</h1>
        <ul>
            <span>Los meses del año son:</span>
        <?php 
            foreach($months as $month){
                echo "<li> $month </li>";
            }
        ?>  
        </ul>
        <ul>
        <span>Orden numeros</span>
            <?php  
            foreach($nums as $num){
                echo "<li> $num </li>";
            }
            ?>
        </ul>
    </body>
</html>