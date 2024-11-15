<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $email = $_POST['email'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $genero = $_POST['genero'] ?? '';


    // Validar el email (expresión regular simple)
    }elseif (!preg_match('/^[a-zA-Z0-9._%+-]+@iespabloserrano\.com$/', $email)) {
        echo "El campo 'E-mail' no es válido.";
    }

    // Validar el nombre (solo letras y espacios)
    elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $nombre)) {
        echo "El campo 'Nombre' no es válido.";
    }

    // Validar el apellido (solo letras y espacios)
    elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $apellido)) {
        echo "El campo 'Apellido' no es válido.";
    }else {
        echo "<h1>Formulario procesado correctamente</h1>";
        echo "<p>Email: $email</p>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Género: $genero</p>";
    }

?>
