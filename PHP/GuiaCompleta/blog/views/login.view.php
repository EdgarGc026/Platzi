<?php require('header.php');?>

<div class="container">
    <div class="post">
        <article>
            <h2 class="title">Iniciar sesion</h2>
            <form class="forms" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <input type="text" name="user" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesion">
            </form>
        </article>
    </div>
</div>
<?php require('footer.php'); ?>