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
   Ordenar un array asociativo por clave:
   Crea un array asociativo con 5 nombres de empleados y sus salarios. 
   Ordena el array por nombre en orden ascendente y muestra el array ordenado en una tabla HTML con cabeceras "Nombre" y "Salario".
*/

$trabajadores = [
   "Arturo" => 2000,
   "Fatima" => 10000,
   "Beatriz" => 15000,
   "Jimena" => 900
];

echo "<div class='titulo'>Tabla Original</div>";
   echo "<table>";
   echo "<tr><th>Nombre</th><th>Sueldo</th></tr>";
   foreach ($trabajadores as $n => $s) {
      echo "<tr><td>$n</td><td>$s</td></tr>";
   }
   echo "</table>";

ksort($trabajadores);

echo "<div class='titulo'>Tabla Modificada</div>";
   echo "<table>";
   echo "<tr><th>Nombre</th><th>Sueldo</th></tr>";
   foreach ($trabajadores as $n => $s) {
      echo "<tr><td>$n</td><td>$s</td></tr>";
   }
   echo "</table>";

?>

</body>
</html>