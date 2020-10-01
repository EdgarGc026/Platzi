<?php
if(isset($_COOKIE['font-size'])){
    $tam = htmlspecialchars($_COOKIE['font-size']);
}else{
    $tam = '18px';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto simple</title>
</head>
<body>

<style>
    p{
        font-size: <?php echo $tam; ?>;
    }

</style>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Reprehenderit dolor aspernatur amet quia? Rerum culpa autem ipsam est facere. 
        Praesentium itaque voluptatum, veritatis ipsam sed voluptate 
        excepturi. Deserunt, repellendus commodi.</p>
</body>
</html>