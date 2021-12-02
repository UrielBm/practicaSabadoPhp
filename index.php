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
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Default Card Example</h3>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                The body of the card
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                The footer of the card
            </div>
            <!-- /.card-footer -->
        </div>
    </div>
</div>
<!-- / .contenido -->

<?php include './resources/layouts/footer.php' ?>