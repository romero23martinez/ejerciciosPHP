<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_10</title>
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

.titulo {
   font-size: 1.8em;
    color: #4a90e2; 
    text-align: center;
    margin: 20px 0 10px;
    font-weight: bold;
    text-transform: uppercase; 
    letter-spacing: 1px;
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

/*
   Ordenar un array asociativo por valor:
   Crea un array asociativo con 5 nombres de productos y sus precios.
   Ordena el array por precio en orden ascendente y muestra el array ordenado en una tabla HTML con cabeceras "Producto" y "Precio".
*/


$vajilla = array("vasos"=> 12.5, "tenedor"=> 1, "cuchara"=> 2, "plato" => 6.95, "bandeja" => 10);


echo "<div class='titulo'>Tabla Original</div>";
echo "<table>";
echo "<tr><th>Producto</th><th>Precio</th></tr>"; 

foreach ($vajilla as $producto => $precio) {

    echo "<tr><td>$producto</td><td>" . sprintf("%.2f", $precio) . " €</td></tr>";
    //echo "<tr><td>$producto</td><td>" . number_format($precio, 2) . "€</td></tr>";
   }
echo "</table>";

asort($vajilla);


echo "<div class='titulo'>Tabla Modificada</div>";
echo "<table>";
echo "<tr><th>Producto</th><th>Precio</th></tr>"; 

foreach ($vajilla as $producto => $precio) {
   echo "<tr><td>$producto</td><td>" . sprintf("%.2f", $precio) . " €</td></tr>";
}


echo "</table>";


//print_r($vajilla)


?>

</body>
</html>