<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_2</title>
</head>
<body>

<?php
/*Añadir elementos a un array numérico: Crea un array vacío. 
Añade cinco 
nombres de ciudades al array y muestra el array completo en pantalla.
*/
?>

<table border="1">

<?php
$ciudades = array();

//$ciudades=[];
//array_push($ciudades, "Madrid", "Zaragoza","Barcelona","Zamora","Teruel");

$ciudades[0] = "Madrid";
$ciudades[1] = "Zaragoza";
$ciudades[2] = "Barcelona";
$ciudades[3] = "Zamora";
$ciudades[4] = "Teruel";

echo "<tr><th>CIUDADES de ESPAÑA</th></tr>";

foreach($ciudades as $x){
    echo "<tr> <td>$x </td></tr>";
}

//var_dump($ciudades)
?>

</table>

</body>
</html>