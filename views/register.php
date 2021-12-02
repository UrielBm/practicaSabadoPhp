<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./../dist/img/favicon.ico" type="image/x-icon" />
    <title>Registro | Reserva Laboratorio</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- my styles -->
    <link rel="stylesheet" href="../css/my_style.css" />
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="./../index.php"><b>Reserva</b>Laboratorios</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrate para acceder</p>

                <form action="./create_user.php" method="post" id="registerForm">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Correo electónico" name="user" id="user">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <!-- message error User -->
                    <p class="text-danger font-italic fontSmall mb-3  d-none" id="userError"></p>

                    <div class="input-group mb-3 mt-3">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" minlength="5">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-eye-slash" id="registerPassword"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Repite la Contraseña" name="rPassword" id="rPassword" minlength="5">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-eye-slash" id="registerRepitePassword"></i>
                            </div>
                        </div>
                    </div>
                    <!-- message error password -->
                    <p class="text-danger font-italic fontSmall mb-3 d-none" id="passwordError"></p>
                    <div class="row mt-3 mb-3">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <a href="./login.php" class="text-center">Ya estoy registrado</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <?php
    if (isset($_SESSION["errores"])) {
        echo "<div class=' alert alert-danger errorMesssage' role='alert'>
                <h5><i class='icon fas fa-ban'></i>¡Error!</h5>        
                <p class='mb-0'>" . $_SESSION["menssageError"] . "</p>
             </div>";
    }
    ?>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!--My js files -->
    <script src="./../javascript/utils.js"></script>
    <script src="../javascript/register.js"></script>
</body>

</html>