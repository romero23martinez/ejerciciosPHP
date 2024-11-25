<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_6</title>
</head>
<body>
<?php
/*Crea un programa con una variable $n1 a la que daremos valor en
 el código. El programa mostrará todos los divisores de ese número.
 */

 /* Version inicial
 $n1 = 50;
 echo "Divisores de $n1: ";

for ($i = 1; $i <= $n1; $i++) {
   
    if ($n1 % $i == 0) {
        echo  " " . $i . " ";
    }

}
*/

//Version mejorada
$n1 = 50;
 echo "Divisores de $n1:<br>";

for ($i = 1; $i <= $n1; $i++) {
   
    if ($n1 % $i == 0) {
       echo $i!=$n1 ? "$i, ": "$i.";
    }

}



/* Version de Juanjo
$n1=50; //numero a calcular los divisores
echo "Los divisores de ". abs($n1) . " son <br>";

for($contador=abs($n1);$contador>=1;$contador--){
    if (abs($n1)% $contador ==0){
        echo $contador!=1? "$contador, ": "$contador .";
    }     
    
}
    */
    
?>
</body>
</html>