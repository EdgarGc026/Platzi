<?php require('header.php');  ?>

<div class="container">
    <div class="post">
        <article>
            <h2 class="title">Editar Post</h2>
            <form class="forms" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                
                <input type="text" name="title" value="<?php echo $post['title'];?>">
                <input type="text" name="excerpt" value="<?php echo $post['excerpt'];?>">
                <textarea type="text" name="body"><?php echo $post['body'];?></textarea>
                <input type="file" name="images">

                <input type="hidden" name="images-save" value="<?php echo $post['images'];?>">
                <input type="submit" value="Modificar articulo">
            </form>
        </article>
    </div>
</div>

<?php require('footer.php');  ?>