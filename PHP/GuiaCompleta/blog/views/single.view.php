<?php require('views/header.php'); ?> 

<div class="container">
    <div class="post">
        <article>
            <h2 class="title"><?php echo $post['title'];?></h2>
            <p class="date_time"><?php echo dateTime($post['created_at']); ?></p>
            <div class="images">
                <img src="<?php RUTA;?>img/<?php echo $post['images'];?>" alt="<?php echo $post['images'];?>">
            </div>
            <p class="fulltext"><?php echo nl2br($post['body']);?></p>
        </article>
    </div>
</div>

<?php require('views/footer.php'); ?>