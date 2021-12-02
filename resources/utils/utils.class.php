<?php
class Utils
{
    public static function validaParametros($parametros)
    {
        foreach ($parametros as $parametro) {
            $validos = true;
            if (isset($parametro)) {
                if ($parametro != "") {
                    $validos = true;
                } else {
                    $validos = false;
                }
            } else {
                $validos = false;
            }
        }
        return $validos;
    }
    public static function iniciar_sesion($user)
    {
        session_start();
        $_SESSION["user"] = $user;
        header("Location:../index.php");
    }

    public static function logout_sesion()
    {
        session_start();
        unset($_SESSION["user"]);
        session_destroy();
        header("Location:./login.php");
    }
    public static function setErrores($error, $location)
    {
        session_start();
        $_SESSION["errores"] = true;
        $_SESSION["menssageError"] = $error;
        header("Location:$location");
    }
    public static function unsetError()
    {
        session_start();
        unset($_SESSION["errores"]);
        unset($_SESSION["menssageError"]);
    }
}
