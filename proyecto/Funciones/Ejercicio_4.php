<?php
/*Escribe una función que calcule el área y el perímetro de un rectángulo.
 La función debe recibir el largo y el ancho como parámetros y devolver un array con el área y el perímetro.
*/


function rectangulo($a, $l) {
    
    $area = $l*$a;
    $perimetro = 2*($a+$l);

    return ['area' => $area, 'perimetro' => $perimetro];
    $resultado = ['area' => $area, 'perimetro' => $perimetro];
    print_r($resultado);

    
}

rectangulo(2,4);




?>