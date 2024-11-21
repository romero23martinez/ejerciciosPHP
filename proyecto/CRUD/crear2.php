<?php

// Ejemplo de insertar un dato ejcutando la sentencia directamente.

include 'conectar.php';

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Habilitar el reporte de errores y excepciones de mysqli

try {
    // Valores que se insertarán en la base de datos
    $nombre = "Juan";
    $apellido = "Pérez";
    $email = "juan.perez@example.com";

    // Consulta SQL para insertar los valores
    $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES ('$nombre', '$apellido', '$email')";

    // Ejecutar la consulta y comprobar si fue exitosa
    $conn->query($sql);

    echo "Nuevo registro creado exitosamente";
} catch (Exception $e) {
    // Capturar y mostrar la excepción
    echo "Error: " . $e->getMessage();
} finally {
    // Cerrar la conexión
    $conn->close();
}
?>