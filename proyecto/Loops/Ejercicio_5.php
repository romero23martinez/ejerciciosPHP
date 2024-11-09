<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_5</title>
</head>
<body>
<?php
/*Crea un programa con una variable $n1 a la que 
daremos valor en el código. Escribe todos los números de $n1 al 
0 contando hacia atrás. Si el número es negativo deberá cambiar su
 valor a positivo.
*/

/*
$n1 = 20;

for ($i = 0; $n1 != 0; $i++){

        if ($n1 < 0) {
            $n1 = -$n1;
        }
            $a = $n1--;

        echo $a . " " ;
    
}
*/

/*
$n1 = -20;

for ($i = 0; $n1 != 0; $i++){

        $a = $n1 < 0 ? $n1 = -$n1 : $n1;
            $a = $n1--;

        echo $a . " " ;
        
}
*/


$n1 = 20;

for ($i = 0; $n1 != 0; $i++){

        if ($n1 < 0) {
            $n1 = -$n1;
        }

            $a = $n1--;


       echo $a . " " ;
        
}
echo 0;

?>

</body>
</html>