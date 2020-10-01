<?php 
    function areaTriangulo($base, $altura){
        $resultado = ($base*$altura) / 2;

        return $resultado;
    }
    $area = areaTriangulo(10,5);

    echo 'el area del triangulo es: ' .$area;
?>