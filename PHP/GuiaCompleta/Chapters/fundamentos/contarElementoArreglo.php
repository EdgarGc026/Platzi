<?php 

$months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
$total = count($months); 
$lastMonth = count($months) - 1;
$months[$lastMonth];

?>

<html>
    <h1>Los meses que hay son: <?php echo $total; ?></h1>
    <h1>El ultimo mes es: <?php echo $months[$lastMonth];  ?></h1>
</html>