<?php
// Ejemplo de API en servidor.
//probar la respuesta utoilziando postman. (Es el programa que trabaja como cliente de la API)
//https://www.postman.com/
//Descargar e instalar la versión de escritorio
//Esta api devuelve un mensaje distinto segun el metodo de llamada

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$data = json_decode(file_get_contents("php://input"), true);

switch($method) {
    case 'GET':
        // Manejo de la solicitud GET
        
        echo json_encode(["message" => "GET method called"]);
        break;
    case 'POST':
        // Manejo de la solicitud POST
        echo json_encode(["message" => "POST method called", "data" => $data]);
        break;
    case 'PUT':
        // Manejo de la solicitud PUT
        echo json_encode(["message" => "PUT method called", "data" => $data]);
        break;
    case 'DELETE':
        // Manejo de la solicitud DELETE
        echo json_encode(["message" => "DELETE method called"]);
        break;
    default:
        echo json_encode(["message" => "Method not supported"]);
    }


?>