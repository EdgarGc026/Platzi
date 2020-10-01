<?php 

$name = $_GET['name'];
$last = $_GET['last'];

if(!empty($name) && !empty($last)){
    echo 'Hola: ' .$name .' '.$last;
}



require 'form.view.php';
?>