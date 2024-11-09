<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_6</title>
</head>
<body>

<?php
/*Recorrer un array asociativo: Crea un array asociativo con los nombres y edades de 5 personas. Escribe un script que 
recorra el array y muestre cada nombre y su edad en una línea nueva.
*/
/*
echo "<ul>";
$personas = array(
        array("nombre" => "Alberto", "edad" => 24),
        array("nombre" => "Pepa", "edad" => 30),
        array("nombre" => "Diego", "edad" => 34),
        array("nombre" => "Alex", "edad" => 12),
        array("nombre" => "Arturo", "edad" => 49)
);   

foreach($personas as $x){

    echo "<li>"$x["nombre"] ."  " . $x["edad"] . "</li>";
};
echo "</ul>";
*/
echo "<ul>";

$personas = [
    "Juan" => 25,
    "María" => 30,
    "Pedro" => 20,
    "Lucía" => 35,
    "Ana" => 28
];

foreach ($personas as $nombre => $edad) {
    echo "<li>$nombre tiene $edad años.</li>";
}
echo "</ul>";

?>


</body>
</html>