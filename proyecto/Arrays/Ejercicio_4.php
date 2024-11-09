<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_4</title>
</head>
<body>

<?php
/*Borrar un elemento específico de un array numérico: Crea un array con los nombres de 5 
colores. Borra el segundo color del array y muestra el array actualizado.
*/

$colores = array("rojo", "verde", "amarillo", "marrón", "azúl");


unset($colores[1]);

echo "<ul>"; 

foreach($colores as $x){
    echo "<li>$x</li>";
}

echo "</ul>"; 
?>

</body>
</html>