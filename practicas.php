<?php
session_start();
$sesion = $_SESSION["user"];
if (!isset($sesion)) {
    header("Location: ./views/login.php");
}
?>
<?php include_once "./views/practicas/funciones_practicas.class.php" ?>
<?php include_once "./connection/connection.php" ?>
<?php include './resources/layouts/header.php' ?>

<!-- Contenido -->
<div class="row">
    <div class="col-5 mb-1">
        <div class="d-flex justify-content-between align-items-baseline">
            <p>Lista de practicas de laboratorio</p>
            <a href="./agregar_practicas.php" class="btn btn-outline-success"><i class="fas fa-plus"></i> Agregar practica</a>
        </div>
    </div>
    <div class="col-12">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th style="width: 40px">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php Practicas::listadoPracticas($conexion) ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- / .contenido -->
<?php
if (isset($_SESSION["errores"])) {
    echo "<div class=' alert alert-danger errorMesssage' role='alert'>
                <h5><i class='icon fas fa-ban'></i>¡Error!</h5>        
                <p class='mb-0'>" . $_SESSION["menssageError"] . "</p>
             </div>";
}
?>
<?php include './resources/layouts/footer.php' ?>