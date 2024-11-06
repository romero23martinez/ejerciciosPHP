<?php
/*Añadir elementos a un array asociativo: Crea un array asociativo vacío. Añade tres pares 
de clave-valor (nombre de país y capital) al array y muestra el array completo.
*/
$estado=[];

/*
$estado = array(
    array("Pais" => "España", "Ciudad" => "Madrid"),
    array("Pais" => "Francia", "Ciudad" => "París"),
    array("Pais" => "Portugal", "Ciudad" => "Lisboa")
);

foreach($estado as $x){

    echo $x["Pais"] ."  " . $x["Ciudad"] . "  | ";
};
*/

$estado["España"] = "Madrid";
$estado["Francia"] = "París";  
$estado["portugal"] = "Lisboa";

foreach($estado as $P => $C){

    echo $P."  " . $C . "  | ";
};
?>