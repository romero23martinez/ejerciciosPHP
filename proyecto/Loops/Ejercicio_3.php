<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_3</title>
</head>
<body>
<?php
/*Crea un programa igual que el anterior pero que lance
 el dado mientras la suma total sea menor que 100.
*/

$total=0;

for ($l=1; $total <=100; $l++) {
    $dado=rand(1, 6);
    if ($dado+$total>=100){
        break;
    }
    $total= $total+$dado;
    echo "Lanzamiento $l con valor $dado, suma total $total<br>";
}
echo "Nº de lanzamientos $l, numero final $total<br> ";


/*
$suma=0;echo($suma);
$numerolanzamiento=0;

while($suma<100 && ){

    $numerolanzamiento++;
    $valor=rand(1, 6);
    $suma+=$valor;
}

echo "He lanzado el dado $numerolanzamiento veces valor =$valor suma =$suma  ";
*/
?>

</body>
</html>