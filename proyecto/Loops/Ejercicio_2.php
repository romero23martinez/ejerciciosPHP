<?php
/*Crea un programa que simule el lanzamiento de un dado 10 veces.
Lanzamiento debe mostrar el numero de lanzamiento, el valor del dado y la 
suma acumulada.
*/


for ($i = 0; $i < 10; $i++) {
    $d = rand(1, 6);
    echo $d . " ";
    
}


?>