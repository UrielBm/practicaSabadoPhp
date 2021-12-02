<?php
$user = "root";
$password = "";
$db = "reservas";
$host = "localhost";

$conexion = mysqli_connect($host, $user, $password, $db);

if ($conexion) {
    mysqli_query($conexion, "SET NAMES 'utf8");
} else {
    die("Error al intentar hacer la conexión");
}
