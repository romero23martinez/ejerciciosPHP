<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_2</title>
</head>
<body>

<?php
/*Crea un programa que simule el lanzamiento de un dado 10 veces.
Lanzamiento debe mostrar el numero de lanzamiento, el valor del dado y la 
suma acumulada.
*/


/*
for ($i = 0; $i < 10; $i++) {
    $d = rand(1, 6);
    echo $d . " ";
    
}
*/
$total = 0;

for ($l=1; $l <= 10; $l++){
    $dado=rand(1,6);
    $total= $total + $dado;

    echo "Tirada: $l resultado: $dado y total suma: $total  |  ";
}

echo "Total lanzamientos $l, resultado final $total";


?>

</body>
</html>