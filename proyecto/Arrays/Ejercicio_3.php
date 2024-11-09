<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_3</title>
</head>
<body>
<?php
/*Modificar un elemento específico de un array numérico: Crea un array con los nombres de 5 animales. Modifica el tercer elemento del array 
para que sea otro animal diferente y muestra el array actualizado.
*/

$animales = array("León", "tigre", "perro", "oso", "elefante");

$animales[2] = "gato";

echo "<ul>"; 

foreach($animales as $x) {
    echo "<li>$x</li>";
}
echo "</ul>";
//print_r($animales);


?>

</body>
</html>