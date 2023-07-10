<?php

require "conexion.php";
session_start();

if (!isset($_SESSION['id'])) {
    header("Location:login.php");
}

$id = $_SESSION['id'];
$usuario = $_SESSION['usuario'];
$nombre = $_SESSION['nombre'];
$correo = $_SESSION['correo'];
$tipo_usuario = $_SESSION['tipo_usuario'];
$foto_perfil = $_SESSION['imagen'];

?>

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
                    <!-- USUARIO Y FOTO DE PERFIL -->
                    <div class="navbar-container container-fluid">
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <!-- SESION DE USUARIO -->
                                <a href="#!">
                                    <button class="btn bg-c-blue btn-round">
                                        <?php
                                        // Muestra las imágenes que pertenecen al usuario actual
                                        echo "<img src='" . $foto_perfil . "' class='img-radius' alt='User-Profile-Image'/>";
                                        echo $nombre; // Muestra el nombre del usuario actual
                                        ?>
                                        <i class="ti-angle-down"></i>
                                    </button>
                                </a>
                                <!-- OPCIONES DE SESION -->
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="buscador.php">
                                            <i class="ti-search"></i> BUSCADOR
                                        </a>
                                    </li>
                                    <li>
                                        <a href="perfil.php">
                                            <i class="ti-user"></i> PERFIL
                                        </a>
                                    </li>
                                    <li>
                                        <a href="salir.php">
                                            <i class="ti-close"></i>SALIR
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- RESTO DE PAGINA -->
            <div class="pcoded-main-container fondo">
                <div class="pcoded-wrapper">
                    <!-- OPCIONES DE MENU -->
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu bg-inverse text-default">
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"><b class="text-default">HOME</b></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <!-- OPCIONES DE INICO -->
                                <!-- INICO -->
                                <li>
                                    <a href="menu.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-home"></i><b>f</b></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.form-components.main">INICIO</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- BUSCADOR-->
                                <li>
                                    <a href="buscador.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-search"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">BUSCADOR</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- NOTI COMPU-->
                                <li>
                                    <a href="noti.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-world"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">NOTI COMPU</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php if ($tipo_usuario == 'empresa') { ?>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"><b class="text-default">COMPANY</b></div>
                                <ul class="pcoded-item pcoded-left-item bg-inverse">
                                    <!-- VER REGISTROS-->
                                    <li>
                                        <a href="registros.php" class="bg-inverse">
                                            <span class="pcoded-micon text-default"><i class="ti-layers"></i><b></b></span>
                                            <span class="pcoded-mtext text-default" data-i18n="nav.form-components.main">VER REGISTROS</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <!-- REGISTRAR -->
                                    <li class="pcoded-hasmenu text-default bg-inverse">
                                        <a href="javascript:void(0)" class="bg-inverse">
                                            <span class="pcoded-micon text-default"><i class="ti-pencil-alt"></i><b></b></span>
                                            <span class="pcoded-mtext text-default" data-i18n="nav.menu-levels.main">REGISTRAR</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                        <ul class="pcoded-submenu bg-inverse">
                                            <li class="bg-inverse">
                                                <a href="reg_equipos.php" class="bg-inverse">
                                                    <span class="pcoded-micon text-default"><i class="ti-angle-right"></i></span>
                                                    <span class="pcoded-mtext text-default" data-i18n="nav.menu-levels.menu-level-21">COMPUTADORA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="reg_partes.php" class="bg-inverse">
                                                    <span class="pcoded-micon text-default"><i class="ti-direction-alt"></i></span>
                                                    <span class="pcoded-mtext text-default" data-i18n="nav.menu-levels.menu-level-22.main">PARTES</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="reg_partes.php" class="bg-inverse">
                                                    <span class="pcoded-micon text-default"><i class="ti-direction-alt"></i></span>
                                                    <span class="pcoded-mtext text-default" data-i18n="nav.menu-levels.menu-level-22.main">ACCESORIOS</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            <?php } ?>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other"><b class="text-default">SETUP</b></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <!-- PERFIL -->
                                <li>
                                    <a href="perfil.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-user"></i><b></b></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.form-components.main">PERFIL</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- SALIR -->
                                <li>
                                    <a href="salir.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-close"></i><b></b></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.form-components.main">SALIR</span>
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
                                    <!-- NOTI COMPU -->
                                    <div class="card page-header p-0 border-primary">
                                        <div class="card-block front-icon-breadcrumb row align-items-end text-default bg-inverse">
                                            <div class="breadcrumb-header col">
                                                <div class="big-icon">
                                                    <i class="ti-id-badge"></i>
                                                </div>
                                                <div class="d-inline-block col-md-8">
                                                    <h3 class="m-b-20 text-left">NOTI COMPU</B></h3>
                                                    <ul class="breadcrumb-title b-t-default p-t-12">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- PAGINA DE COMPUTACION-->
                                        <div class="col-md-12 text-default bg-inverse">
                                            <center><iframe src="https://computerhoy.com/" frameborder="0" width="1000" height="1000"></iframe><br></center>
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