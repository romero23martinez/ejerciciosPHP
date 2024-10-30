<?php
/*Partiendo del programa anterior indica
 si el número es primo o no.
*/

$n1 = 16;
$c = 0;
echo "Divisores de $n1: ";


for ($i = 1; $i <= $n1; $i++) {
   
    if ($n1 % $i == 0) {
        echo  " " . $i . " ";
        $c++;
        }

}

if ($c == 2) {
    echo " | $n1 es primo";
} else {
    echo " | $n1 no es primo";
}





?>