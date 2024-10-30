<?php
/*Crea un programa con una variable aleatoria entre  1 y 50 
y escriba la tabla de multiplicar de dicho número.
*/


$n = rand(1, 50);

for ($i = 1; $i <=10; $i++) {
    $r = $n * $i;
    echo "  $n x $i = $r  |";
}


?>