<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Formulario de Registro</h1>
            <p>Ingresa tus datos para registrarte en el sistema</p>
        </header>

        <?php
        if (isset($_SESSION['error'])) {
            echo "<p style='color:red; text-align:center;'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
        }
        ?>

        <form class="contenido" action="registro.php" method="post">
            <div class="inputBox">
                <label for="id">ID Usuario:</label>
                <input type="text" name="id" value="<?php echo $_SESSION['form_data']['id'] ?? ''; ?>" required>
            </div>
            <div class="inputBox">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo $_SESSION['form_data']['nombre'] ?? ''; ?>" required>
            </div>
            <div class="inputBox">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" value="<?php echo $_SESSION['form_data']['apellido'] ?? ''; ?>" required>
            </div>
            <div class="inputBox">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" name="correo" value="<?php echo $_SESSION['form_data']['correo'] ?? ''; ?>" required>
            </div>
            <div class="inputBox">
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" required>
            </div>
            <div class="inputBox">
                <input type="submit" value="Registrar Usuario">
            </div>
        </form>
    </div>
</body>
</html>
