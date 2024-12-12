<?php
/* Ejemplo de solictar una peticion get a una APIREST que devuelve un JSON con todos los datosy 
transformarlo en datos*/

$url="https://jsonplaceholder.typicode.com/posts";
//URL de la API. si ejecutamos esto en le navegador 
//nos devolvera un archivo JSON con los datos de la entidad posts
//ejecuta en el navegador y analiza la respuesta. Ver archivo

// Realizar la solicitud GET
$response = file_get_contents($url); //forma facil

//las peticiones http se realizan de forma más completa usando curl, permite ver cabeceras,...

// Verificar si la solicitud fue exitosa
if ($response === false) {
    die("Error al realizar la solicitud a la API.");
}

//convertir en un array asociativo
$data = json_decode($response, true);
//prueba a imprimir $data 
//var_dump($data);
//Mejor imprimirlo en php

//mostrar datos
// Mostrar los datos en una tabla HTML
echo "<h1>Publicaciones</h1>";
echo "<table border='1' cellpadding='10' cellspacing='0'>
        <thead>
            <tr>
                <th>ID de la Publicación</th>
                <th>ID del Usuario</th>
                <th>Título</th>
                <th>Contenido</th>
            </tr>
        </thead>
        <tbody>";

// Recorrer los datos y mostrar cada publicación en una fila de la tabla
foreach ($data as $dato) {
    echo "<tr>
            <td>" . htmlspecialchars($dato['id']) . "</td>
            <td>" . htmlspecialchars($dato['userId']) . "</td>
            <td>" . htmlspecialchars($dato['title']) . "</td>
            <td>" . htmlspecialchars($dato['body']) . "</td>
          </tr>";
}

echo "</tbody></table>";



?>