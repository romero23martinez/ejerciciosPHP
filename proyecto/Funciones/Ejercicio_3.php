<?php
/*Escribe una función que convierta temperaturas de Celsius a Fahrenheit y viceversa.
 La función debe recibir la temperatura y la escala ("C" o "F") y devolver la temperatura convertida.
*/



function grados($t, $e){
    if ($e == "F" ){

        $g = ($t-32)/1.8;
        echo "$t º Fahrenheit son " .  number_format($g, 2) . "º Celsius";
    } else {
        $g = ($t*1.8)+32;
        echo "$t º Celsius son $g º Fahrenheit";
    }


}



grados(15, "C");

?>