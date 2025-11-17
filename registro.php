<?php
session_start();
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = trim($_POST['id']); 
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $correo = trim($_POST['correo']);
    $contraseña = $_POST['contraseña'];

    $_SESSION['form_data'] = [
        'id' => $id,
        'nombre' => $nombre,
        'apellido' => $apellido,
        'correo' => $correo
    ];

    $check_id = $conn->prepare("SELECT id FROM registro_usuarios WHERE id = ?");
    $check_id->bind_param("i", $id);
    $check_id->execute();
    $check_id->store_result();

    if ($check_id->num_rows > 0) {
        $_SESSION['error'] = "El ID ya existe. Por favor elige otro.";
        header("Location: registro_usuario.php");
        exit;
    }

    $hash = password_hash($contraseña, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO registro_usuarios (id, nombre, apellido, correo, contraseña) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $id, $nombre, $apellido, $correo, $hash);

    if ($stmt->execute()) {

        unset($_SESSION['form_data']);

        $_SESSION['usuario_id'] = $id;
        $_SESSION['usuario_nombre'] = $nombre;

        header("Location: usuarios_activos.php");
        exit;

    } else {
        $_SESSION['error'] = "Error al registrar usuario: " . $stmt->error;
        header("Location: registro_usuario.php");
        exit;
    }

    $stmt->close();
    $conn->close();

} else {
    header("Location: registro_usuario.php");
    exit;
}
?>
