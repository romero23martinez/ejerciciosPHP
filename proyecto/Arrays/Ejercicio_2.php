<?php
/*Añadir elementos a un array numérico: Crea un array vacío. 
Añade cinco 
nombres de ciudades al array y muestra el array completo en pantalla.
*/

$ciudades = array();

$ciudades[0] = "Madrid";
$ciudades[1] = "Zaragoza";
$ciudades[2] = "Barcelona";
$ciudades[3] = "Zamora";
$ciudades[4] = "Teruel";

foreach($ciudades as $x){
    echo "$x ";
}

var_dump($ciudades)



?>