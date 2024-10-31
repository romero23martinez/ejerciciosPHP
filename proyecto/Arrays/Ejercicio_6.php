<?php
/*Recorrer un array asociativo: Crea un array asociativo con los nombres y edades de 5 personas. Escribe un script que 
recorra el array y muestre cada nombre y su edad en una línea nueva.
*/

$personas = array(
        array("nombre" => "Alberto", "edad" => 24),
        array("nombre" => "Pepa", "edad" => 30),
        array("nombre" => "Diego", "edad" => 34),
        array("nombre" => "Alex", "edad" => 12),
        array("nombre" => "Arturo", "edad" => 49)
);   

foreach($personas as $x){

    echo $x["nombre"] ."  " . $x["edad"] . "  |";
};


?>