<?php
include_once "../../resources/utils/utils.class.php";
include_once "./funciones_practicas.class.php";
include_once "./../../connection/connection.php";

$idPractica = base64_decode($_POST["id"]);
$nombreEdit = $_POST["editNombrePractica"];
$descriptEdit = $_POST["description"];
$location = "./../../practicas.php";
if (Utils::validaParametros([$idPractica, $nombreEdit, $descriptEdit])) {
    if (Practicas::editarPractica($idPractica, $nombreEdit, $descriptEdit, $conexion)) {
        header("location:../../practicas.php");
    } else {
        $message = "Error al editar la practica, intenta de nuevo más tarde.";
        Utils::setErrores($message, $location);
    }
} else {
    $message = "Hacen falta parametros para hacer registro de la practica, intenta de vuelta.";
    Utils::setErrores($message, $location);
}
