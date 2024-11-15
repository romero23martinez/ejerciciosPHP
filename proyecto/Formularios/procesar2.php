<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
$email = htmlspecialchars($_POST['email']);


    if (preg_match('/^[a-zA-Z0-9._%+-]+@iespabloserrano\.com$/', $email)){
        echo "Bienvenido: " . $nombre . " " . $apellido . "<br>";
        echo "Correo válido: " . $email;
    } else {
        http_response_code(400);
        echo "Error: El correo debe pertenecer al dominio @iespabloserrano.com.";
        exit;
    }

}
?>