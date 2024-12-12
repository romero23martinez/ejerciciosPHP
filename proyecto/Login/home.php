<a href=
<?php
session_start();

if(!isset($_SESSION['is_authenticated']) || $_SESSION['is_authenticated'] !== true) {

    header("Location: login.php");
}

try{
    include 'conectar.php';
    
    $conexion=conectar($_SESSION['db_username'], $_SESSION['db_password'])

    header("location: home.php");
    exit();
} catch (Exceotion $e){
    $error="Error de conexión: (salida catch)" . $e->getMessage();
} finally {
    $conn->close();
}