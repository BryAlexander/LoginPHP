<?php
session_start();
session_unset();
session_destroy();
header("Location: registro_usuario.php");
exit();
?>
