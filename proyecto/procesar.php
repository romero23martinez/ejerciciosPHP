<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = htmlspecialchars($_POST['nombre']);
$apellido = htmlspecialchars($_POST['apellido']);
echo "Bienvenido: " . " " . str_replace("aeiou", "u", $nombre). "<br>";

}
?>