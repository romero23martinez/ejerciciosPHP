<?php
/*
Crea un programa en php que genere un numero aleatorio entre 1 y 7. 
El programa debe mostrar el numero y el día de la semana siendo el lunes el día 1 y el domingo el 7.
*/

$d = rand(1, 7);

/*
if ($d == 1){
    echo "$d, Lunes";
}elseif($d == 2){
    echo "$d, Martes";
}elseif($d == 3){
    echo "$d, Miercoles";
}elseif($d == 4){
    echo "$d, Jueves";
}elseif($d == 5){
    echo "$d, Viernes";
}elseif($d == 6){
    echo "$d, Sábado";
}else {
    echo "$d, Domingo";
}
*/


switch ($d){
    case $d==1:
        echo "$d, Lunes";
        break;
    case $d==2:
        echo "$d, Martes";
        break;   

    case $d==3:
        echo "$d, Miercoles";
        break;

    case $d==4:
        echo "$d, Jueves";       
        break;

    case $d==5:
        echo "$d, Viernes";       
        break;
    
    case $d==6:
        echo "$d, Sábado";      
        break;
    
    case $d==7:
        echo "$d, Domingo";       
         break;

    }

?>