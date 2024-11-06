
<?php

/*Borrar un elemento específico de un array asociativo:
 Crea un array asociativo con 4 marcas de autos y
  sus países de origen. Borra uno de los pares del array y muestra el array actualizado.
  */

  $coches = [
    "SEAT" => "España",
    "Alfa Romeo" => "Italia",
    "Fiat" => "Italia",
    "Ford" => "EEUU"
];

unset($coches["SEAT"]);


print_r($coches);



  ?>