<?php
/*Ordenar un array numérico: Crea un array con los nombres de 7 deportes en 
desorden. Ordena el array alfabéticamente y muestra el array ordenado.
*/

$deportes = array("fútbol", "tenis", "padel", 
                  "pinpon", "golf", "natación", "baloncesto");

sort($deportes);

foreach($deportes as $x){
    echo "$x   ";
}


?>