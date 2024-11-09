<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>
<body>

<?php
/*Crea un programa en php con una 
variable $numero con un valor aleatoria entre -100 y 100.
El programa debe escribir un mensaje
indicando si número es positivo, negativo o cero.
*/


$numero = rand(-100, 100);

print "El numero es $numero <br>";

if ($numero > 0){
    echo "$numero Es positivo <br>";
} elseif ($numero < 0){
    echo "Es negativo";
} else {
    echo "Es cero";
}

?>

</body>
</html>