<?php
include 'conectar.php';

try {
    // Valores que se actualizarán
    $id = 1;
    $nombre = "Carlos";
    $apellido = "García";
    $email = "carlos.garcia@example.com";

    // Consulta SQL para actualizar el registro
    $sql = "UPDATE usuarios SET nombre=?, apellido=?, email=? WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nombre, $apellido, $email, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "No se realizaron cambios. Los valores pueden ser los mismos.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Cerrar la conexión
    $conn->close();
}
?>