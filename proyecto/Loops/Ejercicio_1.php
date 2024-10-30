<?php
/*Crea un programa en php que genere 
20 números aleatorios entre 1 y 6 y los muestre por pantalla.
*/

for ($i = 0; $i < 20; $i++) {
    $n = rand(1,6);
    echo $n . " ";
}


?>