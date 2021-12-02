<?php
class Practicas
{

    public static function registrarPractica($nombre, $descrip, $connection)
    {
        $query = "INSERT INTO practicas(nombre,descripcion) VALUES('$nombre', '$descrip')";
        if (mysqli_query($connection, $query)) {
            return true;
        } else {
            return false;
        }
    }
    public static function listadoPracticas($connection)
    {
        $query = "SELECT * FROM practicas";
        $response = mysqli_query($connection, $query);
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                while ($item = mysqli_fetch_array($response)) {
                    $id = $item["id"];
                    $nombre = $item["nombre"];
                    $desc = $item["descripcion"];
                    echo "<tr>
                                <td>" . $id . "</td>
                                <td>" . $nombre . "</td>
                                <td>" . $desc . "</td>
                                <td class='d-flex justify-content-between align-items-center'><a href='./editar_practicas.php?id=" . base64_encode($id) . "'><i class='far fa-edit text-primary'></i></a><i class='far fa-trash-alt text-danger' onclick='handleDeletePractica($id)' ></i></td>
                         </tr>";
                }
            } else {
                echo "<tr>
                        <td colspan='4' class='text-center'> No hay practicas registradas</td>
                    </tr>";
            }
        }
    }
    public static function obtenerPractica($id, $connection)
    {
        $query = "SELECT * FROM practicas where id='$id'";
        $response = mysqli_query($connection, $query);
        if ($response) {
            if (mysqli_num_rows($response) > 0) {
                $practica = mysqli_fetch_object($response);
                return $practica;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public static function editarPractica($id, $nombre, $descrip, $connection)
    {
        $query = "UPDATE practicas SET nombre = '$nombre', descripcion = '$descrip' WHERE id = $id";
        if (mysqli_query($connection, $query)) {
            return true;
        } else {
            return false;
        }
    }
    public static function emilinarPractica($id, $connection)
    {
        $query = "DELETE FROM practicas WHERE id = $id";
        if (mysqli_query($connection, $query)) {
            return true;
        } else {
            return false;
        }
    }
}
