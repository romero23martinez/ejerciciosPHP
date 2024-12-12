<?php
session_start();

function conectar($username, $password){
$servername = "localhost";
$username = "phpmyadmin";
$password = "root";
$dbname = "dbprueba";

if(!$username || $password){

    die("No hay credenciales de usuario en la sesión.");
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: connect_error" . $conn->connet_error);
}

}
?>