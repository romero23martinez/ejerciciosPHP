<?php
/*Escribe una función que reciba un precio y un descuento y devuelva el precio una vez aplicado el descuento.*/



function rebaja($precio, $descuento){

    $total= $precio-($precio*($descuento/100));
    echo number_format($total, 2);
}

rebaja(20.15, 30);

?>