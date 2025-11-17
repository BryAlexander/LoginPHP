<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: registro_usuarios.php");
    exit();
}

require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios Registrados</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo">Usuarios Registrados</h1>

        <div class="welcome-message">
            Bienvenido, <?php echo $_SESSION['usuario_nombre']; ?>
        </div>

        <?php
        $resultado = $conn->query("SELECT id, nombre, apellido, correo FROM registro_usuarios");

        echo "<table class='tabla-usuarios'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Correo</th></tr>";

        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                    <td>{$fila['id']}</td>
                    <td>{$fila['nombre']}</td>
                    <td>{$fila['apellido']}</td>
                    <td>{$fila['correo']}</td>
                  </tr>";
        }

        echo "</table>";
        $conn->close();
        ?>

        <a class="logout-button" href="cerrar_sesion.php">Cerrar sesión</a>
    </div>
</body>
</html>
