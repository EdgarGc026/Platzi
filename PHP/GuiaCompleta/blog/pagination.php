<?php $pages_number = pagesNumber($blog_config['post_per_page'], $connection) ?>
<section class="pagination">
    <ul>
        <!-- Boton izquierda, para regresar -->
        <?php if (actualPage() == 1 ):?>
        <li class="disabled">&laquo;</li>    
        <?php else: ?>
            <li><a href="index.php?=<?php echo actualPage()-1 ?>">&laquo;</a></li> 
        <?php endif; ?>

            <!-- Para obtener los numeros totales de las paginas que habra -->
        <?php for($i = 1; $i<= $pages_number; $i++): ?>
            <?php if(actualPage() == $i): ?>
                <li class="active">
                    <?php echo $i; ?>
                </li>
            <?php else: ?>
                <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>

        <?php endfor; ?>

        <!-- Boton derecha, si aun hay mas paginas por ver, dale, sino, se desactiva -->
        <?php if(actualPage() == $pages_number): ?>
            <li class="disabled">&raquo;</li>
        <?php else: ?>
            <li><a href="index.php?page=<?php echo actualPage()+1; ?>">&raquo;</a></li>
        <?php endif; ?>
    </ul>
</section>