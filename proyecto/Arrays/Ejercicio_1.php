<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>
<body>
<?php

/*Recorrer un array numérico: Crea un array que contenga los nombres de 10 
frutas diferentes. Escribe un script que recorra el array y muestre cada fruta
 en una línea nueva.
 */
?>
 <table border="1">

 <?php
echo "<tr><th>FRUTAS</th></tr>";
$frutas = array("manzana", "pera", "kiwi", "pomelo", "fresa",
                "tomate", "platano", "piña", "sandia", "melon");

foreach ($frutas as $x) {
    echo "<tr> <td>$x</td></tr>";
}

 ?>
</table>
</body>
</html>