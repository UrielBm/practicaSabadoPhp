<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./index.php" class="brand-link">
        <img src="dist/img/logo.png" alt="Logo-laboratorio" class="brand-image logo" style="opacity: .8">
        <span class="brand-text font-weight-light">Laboratorios</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3">
            <h3 class="text-center text-white">¡Bienvenido!</h3>
            <div class="d-flex">
                <div class="image">
                    <?php $_SESSION["user"] === "urielbenitez96@hotmail.com" ? print("<img src='https://scontent.fmex19-1.fna.fbcdn.net/v/t1.6435-9/175624329_110683011159435_6040031161007473780_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=ZuR-jAfdilwAX8aeyba&tn=FWh1akf8FBWrazsZ&_nc_ht=scontent.fmex19-1.fna&oh=c67a71388f9b2e601e4f68eb793f84dd&oe=61CF0593' class='img-circle elevation-2' alt='User Image'>") : print("<img src='dist/img/user2-160x160.jpg' class='img-circle elevation-2' alt='User Image'>") ?>
                </div>
                <div class="info">
                    <p class="user-info"><?php echo $_SESSION["user"]; ?></p>
                </div>
            </div>
            <a href="./views/logout.php" class="btn btn-danger text-white logoutButton"><i class="fas fa-door-open"></i> Cerrar sesión</a>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">Administración</li>
                <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>Agenda <span class="badge badge-info right">2</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./practicas.php" class="nav-link">
                        <i class="nav-icon fas fa-flask"></i>
                        <p>Practicas</p>
                    </a>
                </li>
                <li class="nav-header">Otros</li>
                <li class="nav-item">
                    <a href="iframe.html" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Documentation</p>
                    </a>
                </li>
                <li class="nav-header">Reservaciones</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Proximas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Siguiente semanas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Pasadas</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>