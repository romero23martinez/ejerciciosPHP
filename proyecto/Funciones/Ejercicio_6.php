<?php
/*Escribe una función que calcule el promedio y la mediana de un array de números. 
La función debe recibir el array y devolver un array con el promedio y la mediana.
*/

function aritmetica(...$x){

    
    $suma=0;
    $cadena= count($x);

    for ($i=0; $i < $cadena; $i++){
        $suma += $x[$i];
    
    }
    $media=$suma/$cadena;
    //echo "La media es: $media ";

    sort($x);
    //$solucion= ["Mediana" => $mediana, "Media" => $media];

    if ($cadena%2 == 0){
        $mitad1 = $cadena/2-1;
        $mitad2 = $cadena/2;

        $mediana = ($x[$mitad1]+$x[$mitad2])/2;
        
        print_r($solucion= ["Mediana" => $mediana, "Media" => $media]);
        //echo "La mediana es: $mediana ";
    } else {
        $m = floor($cadena/2);
        $mediana = $x[$m];

        print_r($solucion= ["Mediana" => $mediana, "Media" => $media]);
        //echo "La mediana es: $x[$mediana] ";
    }
    
}

aritmetica(86, 99, 41, 32, 16, 76, 22, 1);



?>