<?php include('views/header.view.php'); ?>
<div class="container">
   <div class="row">
      <div class="col-md-4">
         <h2>Status</h2>

         <?php if (isset($_SESSION['message'])):?>
            <div id="error" class="alert alert-<?php echo $_SESSION['message_type'];?>">
               <?php echo $_SESSION['message'] ?>
               <button type="submit" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <?php session_unset(); ?>
         <?php endif; ?>

         <form id="forms" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input class="form-control" type="text" name="description" id="description">
            <br>
            <button class="btn btn-primary" type="submit">Agregar tarea</button>
         </form>
      </div>

      <div class="col-md-8">
         <h2>Tasks</h2>
         <ul class="list-group">
            <?php foreach ($task as $task) : ?>
               <li class="list-group-item d-flex justify-content-between align-items-center">
                  <?php echo $task['description']; ?>
                  </span>
                  <span>
                     <a href="edit.php?id=<?php echo $task['id']; ?>"><i class="fas fa-square" style="color:black;"></i></a>
                     <a href="delete.php?id=<?php echo $task['id']; ?>"><i class="fas fa-trash-alt" style="color:red;"></i></a>
                  </span>
               </li>
            <?php endforeach; ?>
         </ul>
      </div>
   </div>
</div>
<?php include('views/footer.view.php'); ?>