<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_7</title>
</head>
<body>
<?php
/*Partiendo del programa anterior indica
 si el número es primo o no.
*/

$n1 = 1299708 ;
$c = 0;
echo "Divisores de $n1: ";


for ($i = 1; $i <= $n1; $i++) {
   
    if ($n1 % $i == 0) {
        echo  "<br>" . $i . "<br>" ;
        $c++;
        }

}

if ($c == 2) {
    echo "$n1 es primo<br>";
} else {
    echo "$n1 no es primo<br>";
}

echo "Total numero de divisores: $c<br>"




?>

</body>
</html>