<?php
/*Borrar un elemento específico de un array numérico: Crea un array con los nombres de 5 
colores. Borra el segundo color del array y muestra el array actualizado.
*/

$colores = array("rojo", "verde", "amarillo", "marrón", "azúl");


unset($colores[1]);

foreach($colores as $x){
    echo "$x   ";
}


?>