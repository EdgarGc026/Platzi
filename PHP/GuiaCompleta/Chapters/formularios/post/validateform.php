<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'Se enviaron por POST';
}else{
    echo 'Se envio por GET';
}

/* if(isset($_POST['submit'])){
    echo 'se han enviado los datos correctamente' .'<br/>';
    print_r($_POST['submit']);
} */

?>