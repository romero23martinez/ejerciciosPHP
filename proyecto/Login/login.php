<?php
session_start();
include 'conectar.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
try{
    $_SESSION['db_user'] = $username;
    $_SESSION['db_password'] = $password;
    $conn=conectar($username, $password);
    $_SESSION['is_authenticated'] = true;
    $conn->close();
    header("location: home.php");
    exit();
} catch (Exceotion $e){
    $error="Error de conexión: (salida catch)" . $e->getMessage();
} finally {
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

    </head>
    <body>
        <h1>Inicio de sesión</h1>

    <form action="conectar.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="username" required><br><br>
    <label for="password">Contraseña:</label>
    <input type="text" id="password" name="password" required><br><br>

    <input type="submit" value="Entrar">
    </form>
</body>
</html>