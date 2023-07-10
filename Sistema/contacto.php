<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="recursos/images/favicon.ico" type="image/x-icon">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="recursos/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="recursos/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="recursos/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="recursos/css/style.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/jquery.mCustomScrollbar.css">

    <title>MaryJean TECH</title>
    <style>
        .fondo {
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        }
    </style>
</head>

<body>
    <!-- Precargado de Pagina -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- BARRA DE NAVEGACION -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <div class="container-fluid text-center">
                            <a href="index.php">
                                <img src="recursos\images/logotipo.png" alt="Theme-Logo" width="100" height="60" />
                            </a>

                        </div>
                        <a class="mobile-menu" id="mobile-collapse" href="#">
                            <i class="ti-menu-alt text-inverse"></i> <!-- BOTON DE MENU DESPEGABLE -->
                        </a>
                    </div>
                </div>
            </nav>

            <!-- RESTO DE PAGINA -->
            <div class="pcoded-main-container fondo">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <!-- OPCIONES DE MENU -->
                        <div class="pcoded-inner-navbar main-menu bg-inverse text-default" id="mi-div">
                            <ul class="pcoded-item pcoded-left-item">
                                <!-- OPCIONES DE INICO -->
                                <!-- INICO -->
                                <li>
                                    <br>
                                    <a href="index.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-home"></i><b></b></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.form-components.main">INICIO</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- INICIAR SESION -->
                                <li>
                                    <a href="buscador.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-user"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">INICIAR SESION</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- REGISTRARSE -->
                                <li>
                                    <a href="registrarse.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-direction-alt"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">REGISTRARSE</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- CONTACTO -->
                                <li>
                                    <a href="contacto.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-email"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">CONTACTO</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- CONTENEDORES DE INFO -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="card borderless-card ">
                                        <!-- MIGAS DE PAN -->
                                        <div class="card-block bg-inverse">
                                            <h5 class="m-b-10 text-default">MaryJean TECH</h5>
                                            <p class="m-b-10 text-default">"La mejor manera de cuidar y promover tus equipos"</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="icofont icofont-home text-primary"></i></a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!" class="text-default">Inicio</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!" class="text-default">Contacto</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- FORMULARIO DE -->
                                    <div class="card page-header p-0 border-primary">
                                        <div class="card-block col-md-12 text-default bg-inverse">
                                            <div class="container mt-5">
                                                <h1 class="text-center mb-4 text-primary"><b>CONTACTANOS</b></h1>
                                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">
                                                            <h6 class="text-right">NOMBRE: </h6>
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" name="nombre" placeholder="Nombre y Apellido">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">
                                                            <h6 class="text-right">CORREO: </h6>
                                                        </label>
                                                        <div class="col-sm-8">
                                                            <input type="email" name="email" class="form-control" placeholder="Correo">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label text-right">MENSAJE: </label>
                                                        <div class="col-sm-8">
                                                            <textarea rows="5" cols="5" class="form-control" placeholder="Observaciones"></textarea>
                                                        </div>
                                                    </div>
                                                    <center><button class="btn btn-primary btn-round">Enviar</button></center>
                                                </form>
                                                <?php
                                                if ($_POST) {
                                                    $nombre = $_POST["nombre"];
                                                    $email = $_POST["email"];
                                                    if (isset($nombre)) {
                                                ?>
                                                <br><h6 class="text-center"><label class="label label-inverse-success">
                                                        <?php
                                                        echo "Se envia su mensaje con exito";

                                                        ?>
                                                        </label></h6>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Required Jquery -->
    <script type="text/javascript" src="recursos/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="recursos/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="recursos/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="recursos/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="recursos/pages/todo/todo.js "></script>
    <!-- Custom js -->
    <script type="text/javascript" src="recursos/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="recursos/js/script.js"></script>
    <script type="text/javascript " src="recursos/js/SmoothScroll.js"></script>
    <script src="recursos/js/pcoded.min.js"></script>
    <script src="recursos/js/vartical-demo.js"></script>
    <script src="recursos/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>