<?php
/*Crea un programa en php con dos variables $n1 y $n2 aleatorias entre 0 y 20.
 el programa debe escribir los valores e indicar un 
 mensaje $n1 es mayor que $n2, $n2 es mayor que $n1 o bien que
 son iguales.
*/


$n1 = rand(0,20);

$n2 = rand(0,20);

if ($n1 > $n2){
    echo "$n1 es mayor que $n2";
} elseif($n1 < $n2){
    echo "$n2 es mayor que $n1";
} else {
    echo "Son iguales";
}
 



?>