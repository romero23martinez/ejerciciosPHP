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


/*
        //copio el bucle del ejercicio de los primos
        //Genero la función
        function es_primo($n1):bool{
            $numerodivisores=0;

            for($contador=abs($n1);$contador>=1;$contador--){
                if (abs($n1)% $contador ==0){
                    $numerodivisores ++;
                }     
                
            }
            return ($numerodivisores==2); //Devuelvo el resiltado de la concición, ya es un booleano
            
        }


  for ($numero =1;$numero<100;$numero++){
            echo es_primo($numero)?"$numero es primo <br>":"";
        }
*/
?>
