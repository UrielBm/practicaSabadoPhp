<?php
//archivos de php que se necesitan incluir
include_once "../connection/connection.php";
include_once "../resources/utils/utils.class.php";

//declaración de variables

$user = $_POST["user"];
$password = $_POST["password"];
$confirmPassword = $_POST["rPassword"];
$menssage = "";
$location = "./register.php";

if (Utils::validaParametros([$user, $password, $confirmPassword])) {
    if ($password == $confirmPassword) {
        if (userNameFree($user, $conexion)) {
            if (createUser($user, md5($password), $conexion)) {
                Utils::unsetError();
                Utils::iniciar_sesion($user);
            } else {
                $menssage = "Ocurrio un problema al registrar al nuevo usuario, intenta de nuevo más tarde.";
                Utils::setErrores($menssage, $location);
            }
        } else {
            $menssage = "el correo electrónico ya esta registrado";
            Utils::setErrores($menssage, $location);
        }
    } else {
        $menssage = "Las contraseñas No son iguales";
        Utils::setErrores($menssage, $location);
    }
} else {
    $menssage = "Faltan parametros para hacer registro";
    Utils::setErrores($menssage, $location);
}

//declaración de  funciones 

function userNameFree($userName, $connection)
{
    $query = "SELECT * FROM usuario WHERE usuario = '$userName'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            return false;
        } else {
            return true;
        }
    }
}
function createUser($userName, $password, $connection)
{
    $query = "INSERT INTO usuario(usuario,password) VALUES ('$userName','$password')";
    if (mysqli_query($connection, $query)) {
        return true;
    } else {
        return false;
    }
}
