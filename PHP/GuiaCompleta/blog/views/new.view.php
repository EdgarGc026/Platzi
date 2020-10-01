<?php require('header.php');  ?>

<div class="container">
    <div class="post">
        <article>
            <h2 class="title">Nuevo Post</h2>
            <form class="forms" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <input type="text" name="title" placeholder="Titulo del Post">
                <input type="text" name="excerpt" placeholder="Resumen del post">
                <textarea type="text" name="body" placeholder="Cuerpo del post"></textarea>
                <input type="file" name="images" >
                <input type="submit" value="Crear articulo">
            </form>
        </article>
    </div>
</div>

<?php require('footer.php');  ?>