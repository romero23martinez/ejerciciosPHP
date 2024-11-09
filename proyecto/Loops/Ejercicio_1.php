<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_1</title>
</head>
<body>
<?php
/*Crea un programa en php que genere 
20 números aleatorios entre 1 y 6 y los muestre por pantalla.
*/

for ($i = 0; $i < 20; $i++) {
    $n = rand(1,6);
    echo $n . "<br>";
}


?>

</body>
</html>