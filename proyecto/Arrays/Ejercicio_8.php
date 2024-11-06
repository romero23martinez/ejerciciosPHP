<?php
/*Modificar un elemento específico de un array asociativo: Crea un array asociativo 
con los nombres de 4 países y sus capitales. Modifica la capital de uno de los países y
 muestra el array actualizado.

*/
/*
$estado = array(
    array("Pais" => "España", "Ciudad" => "Madrid"),
    array("Pais" => "Francia", "Ciudad" => "París"),
    array("Pais" => "Portugal", "Ciudad" => "Lisboa"),
    array("Pais" => "Andorra", "Ciudad" => "Andorra la Vella")
);

$estado[1]["Ciudad"]="Tolouse";

foreach($estado as $x){

    echo $x["Pais"] ."  " . $x["Ciudad"] . "  | ";
};
*/

$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Milan",
    "Alemania" => "Berlín"
];

$paises["Italia"] = "Roma";

print_r($paises);

?>
