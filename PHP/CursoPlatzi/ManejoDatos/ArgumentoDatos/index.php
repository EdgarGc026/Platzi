<?php 

  //Valores
  function greet($name){
    return "Hola $name";
  }
  echo greet('Edgar');

  //Referencias
  $course = 'PHP';
  
  function path(&$course){
    $course = 'Laravel';
    echo $course; //Laravel
  }

    path($course);
    echo $course; //Laravel

    //predeterminado
    function greets($name = 'Edgar'){
      return $name;
    }

    echo "Hola, $name";
  
    echo greets('Ramon');
  
 ?>