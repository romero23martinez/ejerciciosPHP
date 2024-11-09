<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_4</title>
</head>
<body>
<?php
/*Crea un programa con una variable aleatoria entre  1 y 50 
y escriba la tabla de multiplicar de dicho número.
*/


$n = rand(1, 50);

for ($i = 1; $i <=10; $i++) {
    $r = $n * $i;
    echo "  $n x $i = $r <br>";
}


?>

</body>
</html>