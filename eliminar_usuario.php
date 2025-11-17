<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM usuarios WHERE id=$id");
}

header("Location: usuarios_activos.php");
exit();
?>
