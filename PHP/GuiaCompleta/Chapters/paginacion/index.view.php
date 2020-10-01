<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Articulos</title>
</head>
<body>
    <div class="container">
        <h1>Articulo</h1>
        <section class="article">
            <ul>
                <?php foreach ($article as $articulo):?>
                    <li><?php echo $articulo['id'] . '.-' .$articulo['description']; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section class="pagination">
            <ul>
                <?php if($page == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?page=<?php echo $page - 1; ?>">&laquo;</a></li>
                <?php endif; ?>

                    <?php 
                    for ($i=1; $i <= $numPage; $i++) { 
                        if($page === $i){
                            echo "<li class='active'><a href='?page=$i'>$i</a></li>";
                        }else{
                            echo "<li><a href='?page=$i'>$i</a></li>";
                        }
                    }
                    ?>

                <?php if($page == $numPage): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="?page=<?php echo $page + 1; ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </section>
    </div>
</body>
</html>