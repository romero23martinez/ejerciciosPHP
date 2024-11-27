<?php
include 'conectar.php';


$result = $conn->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    
   
    <h2>Crear Usuario</h2>
    <form action="procesar.php" method="POST">
        <input type="hidden" name="accion" value="crear">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Crear</button>
    </form>

   
    <h2>Modificar Usuario</h2>
    <form action="procesar.php" method="POST">
        <input type="hidden" name="accion" value="modificar">
        <label for="id_modificar">ID:</label>
        <input type="number" name="id" id="id_modificar" required>
        <label for="nombre_modificar">Nuevo Nombre:</label>
        <input type="text" name="nombre" id="nombre_modificar">
        <label for="email_modificar">Nuevo Email:</label>
        <input type="email" name="email" id="email_modificar">
        <button type="submit">Modificar</button>
    </form>

   
    <h2>Eliminar Usuario</h2>
    <form action="procesar.php" method="POST">
        <input type="hidden" name="accion" value="eliminar">
        <label for="id_eliminar">ID:</label>
        <input type="number" name="id" id="id_eliminar" required>
        <button type="submit">Eliminar</button>
    </form>

    <h1>Gestión de Usuarios</h1>


<h2>Usuarios</h2>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['apellido'] ?></td>
                <td><?= $row['email'] ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>
