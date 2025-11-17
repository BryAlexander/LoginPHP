<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resultado = $conn->query("SELECT * FROM usuarios WHERE id=$id");
    $usuario = $resultado->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

    $conn->query("UPDATE usuarios SET nombre='$nombre', apellido='$apellido', correo='$correo' WHERE id=$id");
    header("Location: usuarios_activos.php");
}
?>

<form method="post">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br><br>
    <label>Apellido:</label>
    <input type="text" name="apellido" value="<?php echo $usuario['apellido']; ?>" required><br><br>
    <label>Correo:</label>
    <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required><br><br>
    <input type="submit" value="Actualizar Usuario">
</form>
