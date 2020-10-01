<?php
/*   $frontend = ['frontend' => 'Javascript'];
    $backend = ['backend' => 'PHP', 'framework' => 'Laravel'];
    var_dump($frontend + $backend);
   */

 /*  $frontend = ['Javascript'];
  $backend = [ 'PHP', 'Laravel'];

  echo "<pre>";
  var_dump(array_merge($frontend, $backend)); */

   /*  $frontend = ['a' => 'Javascript'];
  $backend = [ 'a' => 'PHP', 'b' => 'Laravel'];

  echo "<pre>";
  var_dump(array_merge_recursive($frontend, $backend)); */


    $courses = ['Javascript', 'PHP', 'Laravel'];
    $categories = ['front', 'back', 'framework'];


    echo "<pre>";
    var_dump(array_combine($categories, $courses));
  ?>