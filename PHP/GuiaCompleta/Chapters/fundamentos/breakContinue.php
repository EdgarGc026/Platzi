<?php 

$countries = ['Alemania', 'Irlanda', 'Jamaica', 'Inglaterra', 'Francia', 'Argentina', 'Mexico', 'Bolivia'];

$latam = ['Argentina', 'Mexico', 'Bolivia'];
/* foreach($countries as $country){
    echo "Los paises son: $country<br>";

    if($country == 'Jamaica'){
        echo "<br>Finaliza hasta: <h3>$country</h3>";
        break;
    }
} */

?>

<html>
    <body>
        <h1>Mostrar paises latinoamericanos</h1>
        <?php 
            foreach($latam as $lat){
             echo $lat .'<br>';   
            }
        ?>

        <h2>Saltarnos un pais</h2>
        <?php 
            foreach($countries as $country){
                if($country == 'Alemania'){
                     continue;
                }   
                echo $country .'<br>';
            }
        ?>

    </body>
</html>