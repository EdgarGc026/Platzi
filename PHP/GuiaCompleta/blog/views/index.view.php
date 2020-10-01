<?php require('views/header.php'); ?> 
<div class="container">
    <?php foreach($post as $post): ?>
        <div class="post">
            <article>
                <h2 class="title"><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h2>
                <p class="date_time"><?php echo dateTime($post['created_at']);?></p>
                <div class="images">
                    <a href="single.php?id=<?php echo $post['id'];?>">
                        <img src="<?php RUTA;?>img/<?php echo $post['images'];?>" alt="imagen para ilustrar el post">
                    </a>
                </div>
                <p class="excerpt"><?php echo $post['excerpt'];?></p>
                <a href="single.php?id=<?php echo $post['id'];?>" class="continue">Leer mas</a>
            </article>
        </div>
    <?php endforeach; ?>

    <?php require('pagination.php'); ?>
</div>

<?php require('views/footer.php'); ?>