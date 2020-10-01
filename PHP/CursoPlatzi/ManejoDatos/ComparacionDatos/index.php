<?php 
  //Comparacion
  $courses = ['Javascript', 'PHP'];
  $wishes = ['PHP', 'Laravel', 'Javascript', 'Vuejs'];

  /* var_dump(array_diff($wishes, $courses)); */
  

  $arrA =  [1, 2, 3, 4, 5];
  $arrB =  [3, 4, 5, 6, 7];
  var_dump(array_diff($arrB, $arrA)); //diferencias respecto al orden que agregues.

  echo "<br>";

  //valores y keys
  //diferencias respecto al orden que agregues
  $data = array_diff_assoc($arrA, $arrB); 
  print_r($data);
  
 ?>