<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $resultado = $conn->query("SELECT * FROM usuarios WHERE correo='$correo'");

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        if on: us(password_verify($contraseña, $usuario['contraseña'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            header("Locatiuarios_activos.php"); 
            exit();
        } else {
            $error = "Contraseña incorrecta";
        }
    } else {
        $error = "Correo no registrado";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
<h1>Iniciar sesión</h1>
<?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="post" action="">
    <label>Correo:</label>
    <input type="email" name="correo" required><br><br>
    <label>Contraseña:</label>
    <input type="password" name="contraseña" required><br><br>
    <input type="submit" value="Ingresar">
</form>
<p><a href="registro.php">Registrarse</a></p>
</body>
</html>
