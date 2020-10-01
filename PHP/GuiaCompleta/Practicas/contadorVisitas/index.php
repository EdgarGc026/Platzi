<?php 


function userCount(){
    $file = 'docs.txt';

    if (file_exists($file)) {
        $cont = file_get_contents($file) + 1;
        file_put_contents($file, $cont);

        return $cont;
    }else{
        file_put_contents($file, 1);
        return 1;

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="estilos.css">
    <title>Contador de visitas</title>
</head>
<body>
    <h1>Contador de visitas</h1>
    <div class="visits">
        <p class="number"><?php echo userCount(); ?></p>
        <p class="text">Visitas</p>
    </div>
</body>
</html>