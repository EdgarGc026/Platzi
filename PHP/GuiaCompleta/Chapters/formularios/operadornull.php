<?php 
   
//    $name = isset($_GET['name']) ? $_GET['name'] :'Anonimo'; 
    $name =  $_GET['name'] ?? 'Anonimo'; 
/*    if (isset($_GET['name'])) {
       $name = $_GET['name'];
   }else{
       $name = 'Anonimo';
   } */

    echo $name;
?>

