<?php 

function saludo(){
    echo "Saludando al curso";
}

function suma($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

function saludar($name){
    echo "Saludando: $name";
}


// Mandarla a llamar
saludar('Edgar');
echo '<br>';
$resultado = suma(10,10);
echo $resultado;

/* for($i=0; $i<5; $i++){
    echo saludo(). '<br>';
} */

?>
