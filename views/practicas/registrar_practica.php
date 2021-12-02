<?php
include_once "../../resources/utils/utils.class.php";
include_once "./funciones_practicas.class.php";
include_once "./../../connection/connection.php";
$nombrePractica = $_POST["nombrePractica"];
$description = $_POST["description"];
$location = "./../../agregar_pracicas.php";
if (Utils::validaParametros([$nombrePractica, $description])) {
    if (Practicas::registrarPractica($nombrePractica, $description, $conexion)) {
        Utils::unsetError();
        header("Location:../../practicas.php");
    }
} else {
    $message = "Hacen falta parametros para hacer registro de la practica, intenta de vuelta.";
    Utils::setErrores($message, $location);
}
