<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_2</title>
</head>
<body>

<?php
/*Crea un programa en php con dos variables $n1 y $n2 aleatorias entre 0 y 20.
 el programa debe escribir los valores e indicar un 
 mensaje $n1 es mayor que $n2, $n2 es mayor que $n1 o bien que
 son iguales.
*/


$n1 = rand(0,20);

$n2 = rand(0,20);

print "El numeros son: $n1 y $n2 <br>";

if ($n1 > $n2){
    echo "$n1 es mayor que $n2 <br>";
} elseif($n1 < $n2){
    echo "$n2 es mayor que $n1<br>";
} else {
    echo "Son iguales <br>";
}



?>

</body>
</html>