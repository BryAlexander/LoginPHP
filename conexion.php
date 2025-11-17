<?php
$host = "localhost";
$usuario = "root";
$pass = "";
$bd = "loginphp";

$conn = new mysqli($host, $usuario, $pass, $bd);

if($conn->connect_error){
    die("Conexión fallida" . $conn->connect_error);
}
?>