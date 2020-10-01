<?php 

  $courses = [
    'Frontend'  => 'Javascript', 
    'Backend'  => 'PHP', 
    'Framework' => 'Laravel', 
  ];

  //Forma directa
  foreach($courses as $course){
    echo "$course </br>";
  }

  echo "<br>";
  
  //Con algun indice
  foreach($courses as $key => $value){
    echo "[$key] : $value <br>";
  }

  function upper($course, $key){
    echo strtoupper($course) ." : $key </br>";
  }

  //Funcion propia de un array, recorre todos los elementos
  //Una vez que regresa, procesa el dato, y asi sucesivamente
  array_walk($courses, 'upper');

  /* 
//Algunos otros metodos para trabajar con arrays.


  //comprueba que el key frontend exista en cursos
  array_key_exists('frontend', $courses);
  
  //Esta javascript en el array
  int_array('Javascript', $courses)

  //Imprimir todos los keys en pantalla
  array_key($courses);

  //Mostrar todos los valores en el array
  array_values($courses);

   */

 ?>