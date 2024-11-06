<?php
/*Crea un programa igual que el anterior pero que lance
 el dado mientras la suma total sea menor que 100.
*/
/*
$S = $s + $s;

for ($i = 0; $S >= 99; $i++) {
    $s= rand(1, 6);

    echo $s . " " . $S;
}
*/

$suma=0;echo($suma);
$numerolanzamiento=0;

while($suma<=100){
#    echo("KK");
    $numerolanzamiento++;
    $valor=rand(1, 6);
    $suma+=$valor;
}

echo "He lanzado el dado $numerolanzamiento veces valor =$valor suma =$suma  ";
?>