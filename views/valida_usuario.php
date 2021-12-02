<?php
//archivos de php que se necesitan incluir

include_once "../connection/connection.php";
include_once "../resources/utils/utils.class.php";
// declaración de variables

$user = $_POST["user"];
$password = $_POST["password"];
$location = "./register.php";
$message = "";

// uso de funciones

if (Utils::validaParametros([$user, $password])) {
    if (validaUsuario($user, md5($password), $conexion)) {
        Utils::unsetError();
        Utils::iniciar_sesion($user);
    } else {
        $message = "El usuario no se encuentra registrado, intenta registrandote.";
        Utils::setErrores($message, $location);
    }
} else {
    $message = "Hacen falta parametros para iniciar sesión, intenta de nuevo.";
    $location = "./login.php";
    Utils::setErrores($message, $location);
}


//declaración de funciones


function validaUsuario($usuario, $pwd, $connection)
{
    $myQuery = "SELECT * FROM usuario WHERE usuario='$usuario' AND password='$pwd'";
    $response = mysqli_query($connection, $myQuery);
    if ($response) {
        if (mysqli_num_rows($response) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
