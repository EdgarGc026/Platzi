<?php 
/*
//Extrayendo los caracteres
  $data = "Estudio PHP";
  echo $data[0];
* */

/*
  $post ="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, porro! Nostrum reprehenderit illo esse dolorum, qui asperiores voluptas saepe similique iusto fugit blanditiis accusantium maxime, animi temporibus deserunt sint? Facilis.";
  $extract = substr($post, 0, 20);

  echo "$extract...[ver mas]";
  */
/*   
  $data = 'Javascript, php, laravel'; //campo tag
  $tags = explode(', ', $data); //array
  echo "<pre>";
    var_dump($tags);
  echo "</pre>";*/

  /*$courses = ['javscript', 'php', 'laravel'];
  echo implode(' - ', $courses);*/

  $courses = "    Curso de Laravel    ";
  $courses = trim($courses);
  echo "<pre>";
    echo "Quiero aprender $courses, y otro tema";
  echo "</pre>";
 ?>