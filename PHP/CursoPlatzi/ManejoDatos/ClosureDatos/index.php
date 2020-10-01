<?php 

/* //Variable que requiere logica.
//Funcion anonima que tiene nombre

  $greet = function ($name){
    return "Hola, $name";
  };

  echo $greet('Edgar'); */
 
 function greet(Closure $lang, $name){
   
   return $lang($name);
 }

 $es = function($name){
   return "Hola, $name";
 };

 $en = function($name){
   return "Hello, $name";
 };

 echo greet($es, "Andrea");
 
 ?>