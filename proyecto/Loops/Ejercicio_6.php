<?php
/*Crea un programa con una variable $n1 a la que daremos valor en
 el código. El programa mostrará todos los divisores de ese número.
 */
/*
 $n1 = 10;
 echo "Divisores de $n1: ";

for ($i = 1; $i <= $n1; $i++) {
   
    if ($n1 % $i == 0) {
        echo  " " . $i . " ";
    }

}
*/


$n1=2563; //numero a calcular los divisores
echo "Los divisores de ". abs($n1) . " son <br>";

for($contador=abs($n1);$contador>=1;$contador--){
    if (abs($n1)% $contador ==0){
        echo $contador!=1? "$contador, ": "$contador .";
    }     
    
}
?>