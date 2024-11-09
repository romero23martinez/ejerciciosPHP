<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_5</title>
</head>
<body>

<?php
/*Ordenar un array numérico: Crea un array con los nombres de 7 deportes en 
desorden. Ordena el array alfabéticamente y muestra el array ordenado.
*/
?>

<table border="1">

<?php
echo "<tr><th>Deportes</th></tr>";

$deportes = array("fútbol", "tenis", "padel", 
                  "pinpon", "golf", "natación", "baloncesto");

sort($deportes);

foreach($deportes as $x){
    echo "<tr> <td>$x</td></tr>";
}


?>
</table>

</body>
</html>