<?php
/*

Ejemplo de apirestfull
http://localhost:3000/apiusuarios/idusuario

los datos de la peticion se pasan en un json y se devuelven en un json
usamos las funciones json_encode y json_decode
extraemos información de la url obtenemos el id y chequeamos si es nulo o tiene un valor
el metodo va en el json que envia la petición.
probar la respuesta usando postman
*/







header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');


/*include "db.php";

$mysqli = new mysqli('localhost', 'juanjo', '1234', 'prueba');

// Verificar la conexión
if ($mysqli->connect_error) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de conexión a la base de datos']);
    exit();
}
    */

// Determinar método HTTP
$method = $_SERVER['REQUEST_METHOD'];
$path = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

$id = isset($path[1]) ? intval($path[1]) : null;

switch ($method) {
    case 'GET':
        if ($id) {
            obtenerUsuario($mysqli, $id);
        } else {
            obtenerUsuarios($mysqli);
        }
        break;
    case 'POST':
        crearUsuario($mysqli);
        break;
    case 'PUT':
        if ($id) {
            actualizarUsuario($mysqli, $id);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'ID no especificado']);
        }
        break;
    case 'DELETE':
        if ($id) {
            eliminarUsuario($mysqli, $id);
        } else {
            http_response_code(400);
            echo json_encode(['error' => 'ID no especificado']);
        }
        break;
    default:
        http_response_code(405);
        echo json_encode(['error' => 'Método no permitido']);
        break;
}

$mysqli->close();

// Función: obtener todos los usuarios
function obtenerUsuarios($mysqli) {
    $result = $mysqli->query("SELECT * FROM usuarios");
    $usuarios = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($usuarios);
}

// Función: obtener un usuario por ID
function obtenerUsuario($mysqli, $id) {
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $usuario = $result->fetch_assoc();
    if ($usuario) {
        echo json_encode($usuario);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Usuario no encontrado']);
    }
    $stmt->close();
}

// Función: crear un usuario
function crearUsuario($mysqli) {
    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data['nombre'], $data['apellido'], $data['email'])) {
        $stmt = $mysqli->prepare("INSERT INTO usuarios (nombre, apellido, email) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $data['nombre'], $data['apellido'], $data['email']);
        if ($stmt->execute()) {
            http_response_code(201);
            echo json_encode(['id' => $mysqli->insert_id, 'mensaje' => 'Usuario creado exitosamente']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Error al crear el usuario']);
        }
        $stmt->close();
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Datos incompletos']);
    }
}

// Función: actualizar un usuario
function actualizarUsuario($mysqli, $id) {
    $data = json_decode(file_get_contents('php://input'), true);
    if (isset($data['nombre'], $data['apellido'], $data['email'])) {
        $stmt = $mysqli->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, email = ? WHERE id = ?");
        $stmt->bind_param('sssi', $data['nombre'], $data['apellido'], $data['email'], $id);
        if ($stmt->execute() && $stmt->affected_rows > 0) {
            echo json_encode(['mensaje' => 'Usuario actualizado exitosamente']);
        } else {
            http_response_code(404);
            echo json_encode(['error' => 'Usuario no encontrado']);
        }
        $stmt->close();
    } else {
        http_response_code(400);
        echo json_encode(['error' => 'Datos incompletos']);
    }
}

// Función: eliminar un usuario
function eliminarUsuario($mysqli, $id) {
    $stmt = $mysqli->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param('i', $id);
    if ($stmt->execute() && $stmt->affected_rows > 0) {
        echo json_encode(['mensaje' => 'Usuario eliminado exitosamente']);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Usuario no encontrado']);
    }
    $stmt->close();
}