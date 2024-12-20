<?php
include 'conectar.php';

// Verificar si se recibió una acción
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accion = $_POST['accion'];

    try {
        switch ($accion) {
            case 'crear':
                $nombre = htmlspecialchars($_POST['nombre']);
                $apellido = htmlspecialchars($_POST['apellido']);
                $email = htmlspecialchars($_POST['email']);
                $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, email) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $nombre, $apellido, $email);
                $stmt->execute();
                header("Location: index.php?mensaje=Usuario creado exitosamente");
                break;

            case 'modificar':
                $id = intval($_POST['id']);
                $nombre = htmlspecialchars($_POST['nombre']);
                $email = htmlspecialchars($_POST['email']);
                $stmt = $conn->prepare("UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?");
                $stmt->bind_param("ssi", $nombre, $email, $id);
                $stmt->execute();
                header("Location: index.php?mensaje=Usuario modificado exitosamente");
                break;

            case 'eliminar':
                $id = intval($_POST['id']);
                $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                header("Location: index.php?mensaje=Usuario eliminado exitosamente");
                break;

            default:
                echo "Acción no válida.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $conn->close();
    }
} else {
    echo "Método no permitido.";
}
?>
