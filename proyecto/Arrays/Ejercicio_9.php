<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_9</title>
    <style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #e8f0fe;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h3 {
    font-size: 1.8em;
    color: #333;
    text-align: center;
    margin: 20px 0 10px; 
    font-weight: bold;
}

table {
    width: 30%;
    max-width: 800px;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 20px;
}

th, td {
    padding: 12px 15px;
    border-bottom: 1px solid #dddddd;
    text-align: left;
}

th {
    background-color: #4a90e2;
    color: #ffffff;
    font-weight: bold;
    font-size: 16px;
}

tr:nth-child(even) {
    background-color: #f3f8ff;
}

tr:nth-child(odd) {
    background-color: #ffffff;
}

tr:hover {
    background-color: #d1e3f9;
    transition: background-color 0.3s ease;
}

td {
    color: #333333;
    font-size: 14px;
}

    </style>
</head>
<body>
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

echo "<h3>Tabla Original</h3>";
echo "<table>";
echo "<tr><th>Marca</th><th>País de Origen</th></tr>";

foreach ($coches as $marca => $pais) {
  echo "<tr><td>$marca</td><td>$pais</td></tr>";
}
echo "</table>";


unset($coches["SEAT"]);


echo "<h3>Tabla Modificada</h3>";
echo "<table>";
echo "<tr><th>Marca</th><th>País de Origen</th></tr>";

foreach ($coches as $marca => $pais) {
  echo "<tr><td>$marca</td><td>$pais</td></tr>";
}
echo "</table>";

//print_r($coches);

?>

</body>
</html>