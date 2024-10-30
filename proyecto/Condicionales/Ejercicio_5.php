<?php
/*
Crea un programa con una variable booleana $lluvia y una variable 
$temperatura a las que darás valor en el código. El programa debe dar los siguientes mensajes.
*/

$lluvia = rand(0,1);

$temperatura = rand(-20, 50);

if ($lluvia == true && $temperatura > -10 && $temperatura < 40){
    echo"Hoy llueve quedate en casa";
}elseif($lluvia == false && $temperatura > 20){
    echo"La temperatura es $temperatura y no llueve a la playa";
}elseif($lluvia==false && $temperatura > -10 && $temperatura < 5){
    echo"La temperatura es $temperatura y no llueve a esquiar";
}elseif($lluvia == false && $temperatura > 5 && $temperatura < 20){
    echo"La temperatura es $temeperatura y no llueve, da un paseo";
}else{
    echo"La temperatura es $temperatura, es extrema";
}




?>