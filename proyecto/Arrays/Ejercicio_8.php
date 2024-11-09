<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_8</title>
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
    width: 60%;
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
/*Modificar un elemento específico de un array asociativo: Crea un array asociativo 
con los nombres de 4 países y sus capitales. Modifica la capital de uno de los países y
 muestra el array actualizado.

*/

$estado = array(
    array("Pais" => "España", "Ciudad" => "Madrid"),
    array("Pais" => "Francia", "Ciudad" => "París"),
    array("Pais" => "Portugal", "Ciudad" => "Lisboa"),
    array("Pais" => "Andorra", "Ciudad" => "Andorra la Vella")
);
echo "<h3>Cambio capital de Francia</h3>";

$estado[1]["Ciudad"]="Tolouse";

echo "<table>";
echo "<tr><th>País</th><th>Capital</th></tr>";
foreach($estado as $x){

    echo "<tr><td>" . $x["Pais"] . "</td><td>" . $x["Ciudad"] . "</td></tr>";
};

echo "</table>";

/* Version de Juanjo

echo "</table>";
$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Milan",
    "Alemania" => "Berlín"
];


$paises["Italia"] = "Roma";

print_r($paises);
*/

?>


</body>
</html>