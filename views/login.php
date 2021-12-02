<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./../dist/img/favicon.ico" type="image/x-icon" />
    <title>Login | Reserva Laboratorio</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!--My styles -->
    <link rel="stylesheet" href="../css/my_style.css" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <p><b>Reserva</b>Laboratorios</p>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Ingresa tus datos para iniciar sesión.</p>

                <form action="./valida_usuario.php" method="post" id="form">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo electónico" id="user" name="user" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required minlength="5">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-eye-slash" id="watchPassword"></i>
                            </div>
                        </div>
                    </div>
                    <!--mensajes de errores js -->
                    <p id="mensageError" class="text-danger font-italic fontSmall d-none"></p>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- <p class="mb-1">
                    <a href="forgot-password.html">Olvide mi contraseña</a>
                </p> -->
                <p class="mb-0">
                    <a href="./register.php" class="text-center">Quiero registrarme</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!--My js files -->
    <script src="./../javascript/utils.js"></script>
    <script src="./../javascript/login.js"></script>
</body>

</html>