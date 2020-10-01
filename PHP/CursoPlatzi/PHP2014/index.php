<?php 

/**
  *El frontend controller se encarga de
  * configurar nuestra aplicacion.  
  * 
 */
  require 'config.php';
  require 'helpers.php';

  //Library
  require 'library/Request.php';
  require 'library/Inflector.php';

  //llamar al controlador indicado
  if(empty($_GET['url'])){
    $url = "OurTeamController";
  }else{
    $url = $_GET['url'];
  }

  //Verificar que este funcionando esto.
  $request = new Request($url);
  var_dump($request->execute());

  
?>