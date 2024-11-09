<?php
/*
Escribe una función que calcule el IMC de una persona dado su peso y altura. 
La función debe devolver el IMC y la categoría correspondiente (bajo peso, peso normal, sobrepeso, obesidad).
*/

function calculoIMC($peso, $altura){

    
    $IMC = $peso/$altura**2;

    echo number_format($IMC, 2) . " ";


    if ($IMC < 18.5){
        echo "Peso bajo";
    } elseif ( $IMC >= 18.5 && $IMC < 24.9) {
        echo "Peso normal";
    } elseif ($IMC >= 25 && $IMC < 29.9) {
        echo "Sobrepeso";
    } elseif(IMC >= 30){
        echo "Obesidad";
    }

}

calculoIMC(71, 1.70);
?>
