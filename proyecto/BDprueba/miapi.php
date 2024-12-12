<?php
// Ejemplo de API en servidor.
//probar la respuesta utoilziando postman. (Es el programa que trabaja como cliente de la API)
//https://www.postman.com/
//Descargar e instalar la versión de escritorio
//Esta api devuelve un mensaje distinto segun el metodo de llamada
include 'conectar.php';

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];


switch($method) {
    case 'GET':
        // Manejo de la solicitud GET
        $sql= "SELECT * FROM usuarios";
        $result = $conn->query($sql);
        $usuarios = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode([$usuarios]);
        break;
    case 'POST':
        // Manejo de la solicitud POST
        $data = json_decode(file_get_contents("php://input"), true);
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $data['nombre'], $data['apellido'], $data['email']);
        $stmt->execute();
        echo json_encode(["message" => "POST method called", "data" => $data]);
        break;
    case 'PUT':
        // Manejo de la solicitud PUT
        $data = json_decode(file_get_contents("php://input"), true);
        $stmt = $conn->prepare("UPDATE usuarios SET nombre=?, apellido=?, email=? WHERE id=? ");
        $stmt->bind_param("sssi", $data['nombre'], $data['apellido'], $data['email'], $data['id']);
        echo json_encode(["message" => "PUT method called", "data" => $data]);
        break;
    case 'DELETE':
        // Manejo de la solicitud DELETE
        $data = json_decode(file_get_contents("php://input"), true);
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id=? ");
        $stmt->bind_param("i", $data['id']);
        echo json_encode(["message" => "DELETE method called"]);
        break;
    default:
        echo json_encode(["message" => "Method not supported"]);
    }


?>