<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_7</title>
    <style>
body {
    font-family: 'Roboto', sans-serif;
    background-color: #e8f0fe;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh; 
}

table {
    width: 60%;
    max-width: 800px;
    margin: 20px;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
    border-radius: 8px; 
    overflow: hidden;
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
    </style>
</head>
<body>

<?php
/*Añadir elementos a un array asociativo: Crea un array asociativo vacío. Añade tres pares 
de clave-valor (nombre de país y capital) al array y muestra el array completo.
*/
$estado=[];

/*
$estado = array(
    array("Pais" => "España", "Ciudad" => "Madrid"),
    array("Pais" => "Francia", "Ciudad" => "París"),
    array("Pais" => "Portugal", "Ciudad" => "Lisboa")
);

foreach($estado as $x){

    echo $x["Pais"] ."  " . $x["Ciudad"] . "  | ";
};
*/
echo "<table>";
echo "<tr><th>País</th><th>Capital</th></tr>";

$estado["España"] = "Madrid";
$estado["Francia"] = "París";  
$estado["portugal"] = "Lisboa";

foreach($estado as $P => $C){

    echo "<tr><td>$P</td><td>$C</td></tr>";
};

echo "</table>";
?>

</body>
</html>