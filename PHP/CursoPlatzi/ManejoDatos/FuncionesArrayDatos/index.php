<?php 

/* Métodos usados
  sort($courses) //de menor a mayor
  rsort($courses) //manera recursiva, de mayor a menor
  ksort($courses) // por llave o identifcador
  krsort($courses) //por llave o identificador recursivo. De mayor a menor.

 */

  $courses = [
    'backend' =>'PHP', 
    'frontend' => 'Javascript', 
    'framework' => 'Laravel'
  ];
  
  echo "<pre>";
    var_dump(array_flip($courses));
    var_dump(array_slice($courses, 1));
    var_dump(array_chunk($courses, 1));
    
    $course = array_shift($courses);
    $data = array_pop($courses);
    print_r($data);

    array_unshift($courses, "vuejs", "css");
    print_r($courses);
    array_push($courses, "vuejs");
  


  /* 
  echo "<pre>";
  var_dump(array_slice($courses, 1)); //quitamos el primer elemento 
  var_dump(array_chunk($courses, 1)); //parte en diferentes arreglos para el rendimiento
  var_dump(array_shift($courses)); //Eliminar el primer elemento y retornarlo. ['javascript', 'Laravel'];
  var_dump(array_pop($courses)); //Eliminar el ultimo elemento

  var_dump(array_unshift($courses)); //Agrega en el primer elemento
  
  
  var_dump(array_push($courses)); //Agrega un elemento al final
  
  

  var_dump(array_flip($courses)); //Intercambia los key por los valores
  
  */
 ?>