<?php

/*Recorrer un array numérico: Crea un array que contenga los nombres de 10 
frutas diferentes. Escribe un script que recorra el array y muestre cada fruta
 en una línea nueva.
 */

$frutas = array("manzana", "pera", "kiwi", "pomelo", "fresa",
                "tomate", "platano", "piña", "sandia", "melon");

foreach ($frutas as $x) {
    echo "$x   ";
}

 ?>