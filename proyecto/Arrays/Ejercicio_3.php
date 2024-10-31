<?php
/*Modificar un elemento específico de un array numérico: Crea un array con los nombres de 5 animales. Modifica el tercer elemento del array 
para que sea otro animal diferente y muestra el array actualizado.
*/

$animales = array("León", "tigre", "perro", "oso", "elefante");

$animales[2] = "gato";

foreach($animales as $x) {
    echo "$x  ";
}


?>