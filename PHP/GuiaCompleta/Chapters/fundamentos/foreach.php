<?php 

$months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];


?>

<html>
    <body>
        <ul>
            <span>Los meses del año son:</span>
        <?php 
            foreach($months as $month){
                echo "<li> $month </li>";
            }
        ?>
        </ul>
    </body>
</html>