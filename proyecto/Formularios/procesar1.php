<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
$email = htmlspecialchars($_POST['email']);
$genero = $_POST['genero'] ?? null;

   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El campo 'E-mail' no es válido.";
    }

  
    elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $nombre)) {
        echo "El campo 'Nombre' no es válido.";
    }

 
    elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $apellido)) {
        echo "El campo 'Apellido' no es válido.";
    } 
    
    elseif (empty($genero)) {
        echo "Debe seleccionar un género.<br>";
        return;
    }else {
        echo "<h1>Formulario procesado correctamente</h1>";
        echo "<p>Email: $email</p>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellido: $apellido</p>";
        echo "<p>Género: $genero</p>";
    }

}
?>
