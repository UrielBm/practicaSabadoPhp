<?php
session_start();
$sesion = $_SESSION["user"];
if (!isset($sesion)) {
    header("Location: ./views/login.php");
}
?>
<?php include './resources/layouts/header.php' ?>

<!-- Contenido -->
<div class="row">
    <div class="col-5 mb-1">
        <div class="d-flex justify-content-between align-items-baseline">
            <p>Crear practicas de laboratorio</p>
            <a href="./practicas.php" class="btn btn-outline-success"><i class="fas fa-eye"></i> Ver mis practicas</a>
        </div>
    </div>
</div>
<form class="form" id="registerPracticas" action="./views/practicas/registrar_practica.php" method="POST">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="nombrePractica">Nombre</label>
            <input type="text" class="form-control" placeholder="Nombre de la practica" name="nombrePractica" id="nombrePractica">
            <div class="text-danger font-italic fontSmall d-none" id="errorNombrePracticaForm"></div>
        </div>
    </div>
    <div class="form-group">
        <label for="description">Descripción</label>
        <textarea class="form-control" rows="4" placeholder="Descrición de la practica" name="description" id="descriptionFormPractica"></textarea>
        <div class="text-danger font-italic fontSmall d-none" id="errorDescriptionPracticaForm"></div>
    </div>
    <button type="submit" class="btn btn-primary">Registrar practica</button>
</form>
<?php
if (isset($_SESSION["errores"])) {
    echo "<div class=' alert alert-danger errorMesssage' role='alert'>
                <h5><i class='icon fas fa-ban'></i>¡Error!</h5>        
                <p class='mb-0'>" . $_SESSION["menssageError"] . "</p>
             </div>";
}
?>
<!-- / .contenido -->
<?php include './resources/layouts/footer.php' ?>