<?php
include_once "../../resources/utils/utils.class.php";
include_once "./funciones_practicas.class.php";
include_once "./../../connection/connection.php";

$id = base64_decode($_GET["id"]);
$location = "./../../practicas.php";

if (Practicas::emilinarPractica($id, $conexion)) {
    Utils::unsetError();
    header("location:../../practicas.php");
} else {
    $message = "Error al eliminar practica, intenta más tarde.";
    Utils::setErrores($message, $location);
}
