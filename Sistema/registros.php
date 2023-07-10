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
    <!-- Estilo de fondo & tablas -->
    <style>
        .fondo {
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        }

        .table {
            table-layout: fixed;
            width: 100%;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
            padding: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .table img {
            max-width: 100%;
            height: auto;
        }
    </style>

    <title>MaryJean TECH</title>
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
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <!-- OPCIONES DE MENU -->
                        <div class="pcoded-inner-navbar main-menu bg-inverse text-default">
                            <ul class="pcoded-item pcoded-left-item">
                                <!-- OPCIONES DE INICO -->
                                <!-- INICO -->
                                <li>
                                    <br>
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

                    <!-- TABLAS-->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- TABLA DE EQUIPOS-->
                                    <div class="col-md-12 card order-card">
                                        <!-- TITULO-->
                                        <div class="card-block front-icon-breadcrumb row align-items-end text-primary">
                                            <div class="breadcrumb-header col">
                                                <div class="big-icon">
                                                    <i class="ti-id-badge"></i>
                                                </div>
                                                <div class="d-inline-block col-md-8">
                                                    <h1 class="m-b-20 text-left"><b>REGISTROS</b></h1>
                                                    <h6><i>Visualiza tus equipos en existencia</i></h6>
                                                    <ul class="breadcrumb-title b-t-default p-t-12">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <!-- TITULO Y BOTONES DE TABLA -->
                                            <div class="row">
                                                <div class="col-9 text-inverse">
                                                    <h2>Mi Selección</h2>
                                                </div>
                                                <div class="col-3 text-right">
                                                    <div class="label-main text-center bg-inverse">
                                                        <a href="" class="text-default">
                                                            <label class="label"><i class="ti-book"></i></label><br>
                                                            <label class="label">Excel</label>
                                                        </a>
                                                    </div>
                                                    <div class="label-main text-center bg-inverse">
                                                        <a href="" class="text-default">
                                                            <label class="label"><i class="ti-files"></i></label><br>
                                                            <label class="label">PDF</label>
                                                        </a>
                                                    </div>
                                                    <div class="label-main text-center bg-inverse">
                                                        <a href="" class="text-default">
                                                            <label class="label"><i class="ti-printer"></i></label><br>
                                                            <label class="label">Imprimir</label>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tabla de Selección -->
                                            <div class="row">
                                                <table id="tabla-seleccion" class="table table-responsive text-inverse table-bordered align-middle">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-1 text-center bg-c-lite-green text-inverse align-middle">CATEGORIA</th>
                                                            <th class="col-md-2 text-center bg-c-lite-green text-inverse align-middle">MARCA & MODELO</th>
                                                            <th class="col-md-5 text-center bg-c-lite-green  text-inverse align-middle">DESCRIPCION</th>
                                                            <th class="col-md-1 text-center bg-c-lite-green text-inverse align-middle">PRECIO</th>
                                                            <th class="col-md-1 text-center bg-c-lite-green text-inverse align-middle">CANTIDAD</th>
                                                            <th class="col-md-1 text-center bg-c-lite-green text-inverse align-middle">FECHA<br>REGISTRO</th>
                                                            <th class="col-md-1 text-center bg-c-lite-green text-inverse align-middle"><i class="ti-shopping-cart-full"></i></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                                <div class="label-main">
                                                    <label class="label label-success"><span class="text-inverse "><b>"SELECCIONA"</b> los productos hacia la tabla "Mi Selección"</span></label><br>
                                                </div>
                                                <ul class="breadcrumb-title b-t-inverse p-t-10">
                                                </ul>
                                            </div>
                                        </div>

                                        <ul class="breadcrumb-title b-t-default p-t-10">
                                        </ul>

                                        <!-- Tabla Computadoras -->
                                        <div class="table-responsive table-border-style" id="tabla-computadoras">
                                            <h2 class="text-left text-inverse"><i>Computadoras</i></h2>
                                            <table class="table table-bordered text-inverse border-primary" id="tablad">
                                                <!-- ENCABEZADO -->
                                                <?php



                                                // Consulta los datos de la tabla
                                                $sql = "SELECT id, id_empresa, categoria, marca_modelo, descripcion, precio, fecha_reg, cantidad, imagen FROM computadora";
                                                $resultado = mysqli_query($mysqli, $sql);
                                                // Si hay datos, crea la tabla HTML
                                                if (mysqli_num_rows($resultado) > 0) {
                                                ?>
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-2 text-center bg-c-blue text-inverse align-middle">Imagen de Producto</th>
                                                            <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Tipo</th>
                                                            <th class="col-md-2 text-center bg-c-blue text-inverse align-middle">Marca & Modelo</th>
                                                            <th class="col-md-3 text-center bg-c-blue  text-inverse align-middle">Descripcion de Producto</th>
                                                            <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Precio</th>
                                                            <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Cantidad Producto</th>
                                                            <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Fecha de<br>Registro</th>
                                                            <th class="text-center bg-c-blue text-inverse align-middle"><i class="ti-shopping-cart-full"></i></th>
                                                        </tr>
                                                    </thead>
                                                    <!-- DATOS -->
                                                    <tbody>
                                                        <?php
                                                        while ($fila = mysqli_fetch_assoc($resultado)) {
                                                        ?>
                                                            <tr>
                                                                <td class="text-center align-middle">
                                                                    <div class="text-wrap" style="width: auto;">
                                                                        <img src="<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['marca_modelo']; ?>" class="img-fluid" width="100" height="80">
                                                                    </div>
                                                                </td>
                                                                <td class="text-center align-middle"><?php echo $fila['categoria']; ?></td>
                                                                <td class="text-center align-middle"><?php echo $fila['marca_modelo']; ?></td>
                                                                <td class="align-middle text-wrap text-center">
                                                                    <div class="text-wrap" style="width: auto;">
                                                                        <?php echo $fila['descripcion']; ?>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center align-middle">$<?php echo $fila['precio']; ?></td>
                                                                <td class="text-center align-middle"><?php echo $fila['fecha_reg']; ?></td>
                                                                <td class="text-center align-middle"><?php echo $fila['cantidad']; ?></td>
                                                                <td class="text-center align-middle">
                                                                    <a class="btn-seleccionar">
                                                                        <label class="label label-success" title="Seleccionar" data-toggle="tooltip" data-placement="left"><i class="ti-plus text-center"></i></label><br>
                                                                    </a>
                                                                    <a href="">
                                                                        <label class="label label-primary" data-toggle="tooltip" data-placement="left" title="Editar"><i class="ti-trash"></i></label><br>
                                                                    </a>
                                                                    <a href="">
                                                                        <label class="label label-danger" data-toggle="tooltip" data-placement="left" title="Eliminar"><i class="ti-marker-alt"></i></label>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                <?php
                                                }
                                                ?>
                                            </table>
                                        </div>

                                        <br>
                                        <ul class="breadcrumb-title b-t-default p-t-10">
                                        </ul><br>


                                        <!-- Tabla de Partes & Accesorios -->
                                        <div class="table-responsive" id="tabla-accesorios">
                                            <h2 class="text-left text-inverse"><i>Partes & Accesorios</i></h2>
                                            <table class="table table-bordered text-inverse">
                                                <thead>
                                                    <tr>
                                                        <th class="col-md-2 text-center bg-c-blue text-inverse align-middle">Imagen de Producto</th>
                                                        <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Tipo</th>
                                                        <th class="col-md-2 text-center bg-c-blue text-inverse align-middle">Marca & Modelo</th>
                                                        <th class="col-md-3 text-center bg-c-blue  text-inverse align-middle">Descripcion de Producto</th>
                                                        <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Precio</th>
                                                        <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Cantidad Producto</th>
                                                        <th class="col-md-1 text-center bg-c-blue text-inverse align-middle">Fecha de<br>Registro</th>
                                                        <th class="text-center bg-c-blue text-inverse align-middle"><i class="ti-shopping-cart-full"></i></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="text-center align-middle">
                                                            <div class="text-wrap" style="width: auto;">
                                                                <img src="https://via.placeholder.com/150x150.png?text=Computadora+1" alt="Computadora 1" class="img-fluid">
                                                            </div>
                                                        </th>
                                                        <td class="text-center align-middle">Laptop</td>
                                                        <td class="text-center align-middle">Acer Chromebook Spin 713</td>
                                                        <td class="align-middle text-wrap text-center">
                                                            <div class="text-wrap" style="width: auto;">
                                                                Procesador Intel Core i5 de undécima generación, 8 GB de RAM, SSD de 128 GB, pantalla táctil Full HD
                                                            </div>
                                                        </td>
                                                        <td class="text-center align-middle">$629</td>
                                                        <td class="text-center align-middle">20</td>
                                                        <td class="text-center align-middle">20/06/23</td>
                                                        <td class="text-center align-middle">
                                                            <a class="btn-seleccionar">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Seleccionar">
                                                                    <i class="ti-plus text-center"></i>
                                                                </button>
                                                            </a>
                                                            <ul class="breadcrumb-title b-t-disabled p-t-10">
                                                            </ul>
                                                            <a href="">
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light align-middle" data-toggle="tooltip" data-placement="left" title="Editar">
                                                                    <i class="ti-marker-alt"></i>
                                                                </button>
                                                            </a>

                                                            <ul class="breadcrumb-title b-t-disabled p-t-10">
                                                            </ul>
                                                            <a href="">
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Eliminar">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center align-middle">
                                                            <div class="text-wrap" style="width: auto;">
                                                                <img src="https://via.placeholder.com/150x150.png?text=Computadora+2" alt="Computadora 2" class="img-fluid">
                                                            </div>
                                                        </th>
                                                        <td class="text-center align-middle">Acer</td>
                                                        <td class="text-center align-middle">Chromebook Spin 713</td>
                                                        <td class="text-center align-middle text-wrap">
                                                            <div class="text-wrap" style="width: auto;">
                                                                Procesador Intel Core i5 de undécima generación, 8 GB de RAM, SSD de 128 GB, pantalla táctil Full HD
                                                            </div>
                                                        </td>
                                                        <td class="text-center align-middle text-wrap">$629</td>
                                                        <td class="text-center align-middle">20</td>
                                                        <td class="text-center align-middle">20/06/23</td>
                                                        <td class="text-center align-middle">
                                                            <a class="btn-seleccionar">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Seleccionar">
                                                                    <i class="ti-plus text-center"></i>
                                                                </button>
                                                            </a>
                                                            <ul class="breadcrumb-title b-t-disabled p-t-10">
                                                            </ul>
                                                            <a href="">
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Editar">
                                                                    <i class="ti-marker-alt"></i>
                                                                </button>
                                                            </a>

                                                            <ul class="breadcrumb-title b-t-disabled p-t-10">
                                                            </ul>
                                                            <a href="">
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Eliminar">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center align-middle"><img src="https://via.placeholder.com/150x150.png?text=Computadora+3" alt="Computadora 3"></th>
                                                        <td class="text-center align-middle">Acer</td>
                                                        <td class="text-center align-middle">Chromebook Spin 713</td>
                                                        <td class="text-center align-middle text-wrap">
                                                            <div class="text-wrap" style="width: auto;">
                                                                Procesador Intel Core i5 de undécima generación, 8 GB de RAM, SSD de 128 GB, pantalla táctil Full HD
                                                            </div>
                                                        </td>
                                                        <td class="text-center align-middle">$629</td>
                                                        <td class="text-center align-middle">20</td>
                                                        <td class="text-center align-middle">20/06/23</td>
                                                        <td class="text-center align-middle">
                                                            <a class="btn-seleccionar">
                                                                <button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Seleccionar">
                                                                    <i class="ti-plus text-center"></i>
                                                                </button>
                                                            </a>
                                                            <ul class="breadcrumb-title b-t-disabled p-t-10">
                                                            </ul>
                                                            <a href="">
                                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Editar">
                                                                    <i class="ti-marker-alt"></i>
                                                                </button>
                                                            </a>

                                                            <ul class="breadcrumb-title b-t-disabled p-t-10">
                                                            </ul>
                                                            <a href="">
                                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="left" title="Eliminar">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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

    <!-- FUNCIONES DE TABLA SELECCIONAR -->
    <script>
        // Función para copiar una fila a la tabla de selección
        function seleccionarFila(tablaOrigen, filaOrigen, tablaDestino) {
            // Obtener los datos de la fila seleccionada, excluyendo la primera y última columna
            var datos = [];
            $(filaOrigen).children("td:not(:first-child, :last-child)").each(function() {
                datos.push($(this).text());
            });
            // Crear una nueva fila en la tabla de selección
            var filaDestino = $("<tr>");
            for (var i = 0; i < datos.length; i++) {
                $("<td class='text-center align-middle text-wrap'> <div class='text-wrap text-center'> style='width: auto;;'").text(datos[i]).appendTo(filaDestino);
            }
            // Agregar un botón de borrar a la nueva fila
            $("</div><td class='col-md-1'>").html(`<a class="btn btn-borrar text-inverse"><i class="ti-close"></i></a>`).appendTo(filaDestino);
            // Agregar la nueva fila a la tabla de selección
            $(tablaDestino).find("tbody").append(filaDestino);
            // Asociar el evento de clic al botón de borrar
            $(filaDestino).find(".btn-borrar").click(function() {
                $(this).closest("tr").remove();
            });
        }

        $(document).ready(function() {
            // Asociar el evento de clic al botón de seleccionar de la tabla de computadoras
            $("#tabla-computadoras .btn-seleccionar").click(function() {
                var filaOrigen = $(this).closest("tr");
                seleccionarFila("#tabla-computadoras", filaOrigen, "#tabla-seleccion");
            });
            // Asociar el evento de clic al botón de seleccionar de la tabla de accesorios
            $("#tabla-accesorios .btn-seleccionar").click(function() {
                var filaOrigen = $(this).closest("tr");
                seleccionarFila("#tabla-accesorios", filaOrigen, "#tabla-seleccion");
            });
        });
    </script>
    <!-- DATATABLE para tabla "tablab" -->
    <script>
        $(document).ready(function() {
            $('#tablabd').DataTable({
                language: {
                    processing: "<span class='text-inverse'>Tratamiento en curso...</span>", // Texto que se muestra mientras se procesa la tabla.
                    search: "<span class='text-inverse'>BUSCAR: </span>", // Icono que se muestra en el cuadro de búsqueda.
                    lengthMenu: "<span class='text-inverse'>Agrupar de _MENU_</span>", // Texto que se muestra en el menú desplegable de la cantidad de elementos por página.
                    infoEmpty: "<span class='text-primary'>NO TIENE DATOS REGISTRADOS.</span>", // Texto que se muestra cuando la tabla está vacía.
                    infoFiltered: "<span class='text-primary'>(filtrado de _MAX_ elementos en total)</span>", // Texto que se muestra después del texto de información de la tabla, indicando cuántos elementos se están mostrando después de aplicar filtros.
                    infoPostFix: "", // Texto adicional que se añade después del texto de información de la tabla.
                    loadingRecords: "<span class='text-primary'>Cargando...</span>", // Texto que se muestra mientras se cargan los registros de la tabla.
                    zeroRecords: "<span class='text-primary'>No esta ese equipo disponible.</span>", // Texto que se muestra cuando no se encuentran registros con el término de búsqueda.
                    emptyTable: "<span class='text-primary'>No hay datos disponibles en la tabla.</span>", // Texto que se muestra cuando la tabla está vacía.
                    paginate: { // Texto que se muestra en los botones de paginación.
                        first: "<span class='text-primary'>Primero</span>",
                        previous: "<span class='text-primary'>Anterior</span>",
                        next: "<span class='text-primary'>Siguiente</span>",
                        last: "<span class='text-primary'>Ultimo</span>"
                    },
                    aria: { // Texto que se muestra en el atributo "aria-label" de los botones de ordenación.
                        sortAscending: "<span class='text-primary'>: active para ordenar la columna en orden ascendente</span>",
                        sortDescending: "<span class='text-primary'>: active para ordenar la columna en orden descendente</span>"
                    }
                },
                scrollY: 400, // Altura en píxeles de la sección de desplazamiento vertical de la tabla.
                lengthMenu: [
                    [4, 8, -1], // Valores que se muestran en el menú desplegable de la cantidad de elementos por página.
                    [4, 8, "All"]
                ],
                autoWidth: false, // Desactiva el ajuste automático del ancho de las columnas.
                fixedHeader: true, // Mantiene el encabezado de la tabla fijo en la parte superior de la página mientras se desplaza.
                responsive: true, // Activa la funcionalidad de diseño responsivo de DataTables.
                columnDefs: [ // Define las opciones de las columnas.
                    {
                        width: '30%',
                        targets: 0
                    }, // Ancho de la primera columnaen un 30%.
                    {
                        width: '10%',
                        targets: 1
                    }, // Ancho de la segunda columna en un 10%.
                    {
                        width: '10%',
                        targets: 2
                    }, // Ancho de la tercera columna en un 10%.
                    {
                        width: '20%',
                        targets: 3
                    }, // Ancho de la cuarta columna en un 30%.
                    {
                        width: '5%',
                        targets: 4
                    }, // Ancho de la quinta columna en un 5%.

                    {
                        width: '5%',
                        targets: 5
                    }, // Ancho de la sexta columna en un 5%.
                    {
                        width: '5%',
                        targets: 5
                    }, // Ancho de la septima columna en un 5%.
                    {
                        width: '5%',
                        targets: 5
                    }, // Ancho de la octava columna en un 5%.
                ]
            });
        });
    </script>
    <!-- DATATABLE para tabla "tablab" -->
    <script>
        $(document).ready(function() {
            $('#tablac').DataTable({
                language: {
                    processing: "<span class='text-inverse'>Tratamiento en curso...</span>", // Texto que se muestra mientras se procesa la tabla.
                    search: "<span class='text-inverse'>BUSCAR: </span>", // Icono que se muestra en el cuadro de búsqueda.
                    lengthMenu: "<span class='text-inverse'>Agrupar de _MENU_</span>", // Texto que se muestra en el menú desplegable de la cantidad de elementos por página.
                    infoEmpty: "<span class='text-primary'>NO TIENE DATOS REGISTRADOS.</span>", // Texto que se muestra cuando la tabla está vacía.
                    infoFiltered: "<span class='text-primary'>(filtrado de _MAX_ elementos en total)</span>", // Texto que se muestra después del texto de información de la tabla, indicando cuántos elementos se están mostrando después de aplicar filtros.
                    infoPostFix: "", // Texto adicional que se añade después del texto de información de la tabla.
                    loadingRecords: "<span class='text-primary'>Cargando...</span>", // Texto que se muestra mientras se cargan los registros de la tabla.
                    zeroRecords: "<span class='text-primary'>No esta ese equipo disponible.</span>", // Texto que se muestra cuando no se encuentran registros con el término de búsqueda.
                    emptyTable: "<span class='text-primary'>No hay datos disponibles en la tabla.</span>", // Texto que se muestra cuando la tabla está vacía.
                    paginate: { // Texto que se muestra en los botones de paginación.
                        first: "<span class='text-primary'>Primero</span>",
                        previous: "<span class='text-primary'>Anterior</span>",
                        next: "<span class='text-primary'>Siguiente</span>",
                        last: "<span class='text-primary'>Ultimo</span>"
                    },
                    aria: { // Texto que se muestra en el atributo "aria-label" de los botones de ordenación.
                        sortAscending: "<span class='text-primary'>: active para ordenar la columna en orden ascendente</span>",
                        sortDescending: "<span class='text-primary'>: active para ordenar la columna en orden descendente</span>"
                    }
                },
                scrollY: 400, // Altura en píxeles de la sección de desplazamiento vertical de la tabla.
                lengthMenu: [
                    [4, 8, -1], // Valores que se muestran en el menú desplegable de la cantidad de elementos por página.
                    [4, 8, "All"]
                ],
                autoWidth: false, // Desactiva el ajuste automático del ancho de las columnas.
                fixedHeader: true, // Mantiene el encabezado de la tabla fijo en la parte superior de la página mientras se desplaza.
                responsive: true, // Activa la funcionalidad de diseño responsivo de DataTables.
                columnDefs: [ // Define las opciones de las columnas.
                    {
                        width: '30%',
                        targets: 0
                    }, // Ancho de la primera columnaen un 30%.
                    {
                        width: '10%',
                        targets: 1
                    }, // Ancho de la segunda columna en un 10%.
                    {
                        width: '10%',
                        targets: 2
                    }, // Ancho de la tercera columna en un 10%.
                    {
                        width: '30%',
                        targets: 3
                    }, // Ancho de la cuarta columna en un 30%.
                    {
                        width: '5%',
                        targets: 4
                    }, // Ancho de la quinta columna en un 5%.
                    {
                        width: '5%',
                        targets: 5
                    } // Ancho de la sexta columna en un 5%.
                ]
            });
        });
    </script>
</body>

</html>