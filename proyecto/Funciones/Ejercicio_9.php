<?php
/*Realiza una función que reciba como parámetro una contraseña y devuelva un booleano indicando si es valida o no.
 Contraseña válida mas de 8 caracteres y al menos un carácter no numérico y mayúsculas y minúsculas.
*/


function contraseña(){

    $pass = "";
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz@#$%&-0123456789";
    
    $bucle = rand(8,12);

    for ($i = 1; $i<=$bucle; $i++){

        $n = rand(0, strlen($cadena) -1);
        $pass .=$cadena[$n];
    }     
    return $pass;

}

$x = contraseña();
echo $x . "  ";
function password($y){
    $patron= "/^(?=.*\w)(?=.*[^\w]).{8,}+$/";
    
    $y = preg_match($patron, $y) ? true : false;
    

    return $y;
}

echo password($x);



?>