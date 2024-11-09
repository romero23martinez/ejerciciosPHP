<?php

/*
   Ordenar un array asociativo por valor:
   Crea un array asociativo con 5 nombres de productos y sus precios.
   Ordena el array por precio en orden ascendente y muestra el array ordenado en una tabla HTML con cabeceras "Producto" y "Precio".
*/


$vajilla = array("vasos"=> 12.5, "tenedor"=> 1, "cuchara"=> 2, "plato" => 6.95, "bandeja" => 10);


asort($vajilla);

print_r($vajilla)


?>