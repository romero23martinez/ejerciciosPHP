<?php
/*Escribe una función que reciba una serie de números como parámetro,
 la cantidad de números puede ser variable, y devuelva el número que más veces aparece.
*/


function numeros(...$x){

    //$cadena = implode(" ", $x);
    //$patron="/[0-9]/";

    //echo preg_match_all($patron, $cadena);


    $repeticion= array_count_values($x);

    $masfrecuente = array_search(max($repeticion), $repeticion);

    return $masfrecuente;

}


numeros(5, 12, 7, 9, 15, 5, 3, 8, 15, 3, 12, 6, 19, 7, 9, 3, 6, 15, 8, 5);




?>