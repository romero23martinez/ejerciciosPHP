<?php
/*
Crea un programa en php con tres variables aleatorias $n1,$n2,$n3. 
El programa mostrará sus valores y posteriormente las mostrará los números ordenados de mayor a menor.
*/

$n1 = rand(0,100);
$n2 = rand(0,100);
$n3 = rand(0,100);

echo " n1 = $n1, n2 = $n2, n3 = $n3 ";
echo "    ";

/*
$n = array($n1, $n2, $n3);
rsort($n);

echo implode(", ", $n);
*/


if ($n1 > $n2 && $n2 > $n3){
    echo "$n1, $n2, $n3";
} elseif($n2 > $n1 && $n1 > $n3){
    echo "$n2, $n1, $n3";
}elseif($n3 > $n2 && $n2 > $n1){
    echo "$n3, $n2, $n1";
}elseif($n3 > $n1 && $n1 > $n2){
    echo "$n3, $n1, $n2";
} elseif($n1 > $n3 && $n3 > $n2){
    echo"$n1, $n3, $n2";
}else{
    echo"$n2, $n3, $n1";
}

/* Fumada con una varieble más para intercambiar posiciones
$swap=$n1;

if ($n1 < $n2 && $n2 < $n3){
    echo "$";
}
*/

?>