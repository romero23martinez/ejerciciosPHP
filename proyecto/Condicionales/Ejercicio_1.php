<?php
/*Crea un programa en php con una 
variable $numero con un valor aleatoria entre -100 y 100.
El programa debe escribir un mensaje
indicando si número es positivo, negativo o cero.
*/

$numero = rand(-100, 100);


if ($numero > 0){
    echo "Es positivo";
} elseif ($numero < 0){
    echo "Es negativo";
} else {
    echo "Es cero";
}

?>