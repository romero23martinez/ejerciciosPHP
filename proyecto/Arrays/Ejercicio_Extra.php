<?php
/*
$alumno = array(
    array("Asignatura" => "Ofimatica", "Nota" => 8),
    array("Asignatura" => "Programacion", "Nota" => 7),
    array("Asignatura" => "Seguridad", "Nota" => 9),
    array("Asignatura" => "Servicios", "Nota" => 2)
);
*/
$alumno = [$pedro, $marcos];

$marcos = [
    "Ofimatica" => 5,
    "Programacion" => 9,
    "Seguridad" => 2,
    "Servicios" => 4
];
/*
$pedro = [
    "Ofimatica" => 5,
    "Programacion" => 9,
    "Seguridad" => 2,
    "Servicios" => 4
];*/


foreach($alumno as $A => $N){

    $m = ($A[1] + $N[3]);
    echo $m;
}
#print_r($alumno);

?>
