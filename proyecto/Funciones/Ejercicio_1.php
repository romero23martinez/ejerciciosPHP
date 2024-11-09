<?php
/*Genera una función que reciba como parámetro un número y devuelva un booleano indicando si 
es primo o no. Utiliza la función para calcular todos los primos entre uno y un millón.
*/


$aleatorio = rand(0,1000000);
//echo $aleatorio;


function primo($n) {


        $c = 0;
        for ($i = 1; $i <= $n; $i++) {
           
            if ($n % $i == 0) {
               
                $c++;
                }
        
        }
        
        if ($c == 2) {
            echo "$n es primo";
        } else {
            echo "$n no es primo";
        }
    
}


primo($aleatorio);

?>
