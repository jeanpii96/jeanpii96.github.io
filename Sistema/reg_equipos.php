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

                    <!-- REGISTRAR EQUIPOS -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="card page-header p-0 border-primary">
                                        <!-- REGISTRAR  -->
                                        <div class="card-block text-default bg-inverse">
                                            <!-- FORMULARIO DE REGISTRO -->
                                            <h3 class="text-c-blue text-center">REGISTRAR EN INVENTARIO<b> (EQUIPOS)</b></h3>
                                            <br>
                                            <?php
                                            // Obtener el usuario actual
                                            $query_user = "SELECT usuario FROM usuarios WHERE nombre='$nombre' AND id='$id'";
                                            $resul_user = mysqli_query($mysqli, $query_user);
                                            $fila_user = mysqli_fetch_assoc($resul_user);
                                            $usuario = $fila_user["usuario"];
                                            // Obtener nombre de empresa
                                            $query_emp = "SELECT empresa FROM empresas WHERE representante='$usuario'";
                                            $resul_emp = mysqli_query($mysqli, $query_emp);
                                            $fila_emp = mysqli_fetch_assoc($resul_emp);
                                            $empresa = $fila_emp["empresa"];
                                            ?>
                                            <form method="POST" action="reg_equipos.php" enctype="multipart/form-data" class="md-float-material text-center" autocomplete="off">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="id_empresa" value="<?php echo  $empresa ?>">
                                                        <h6>TIPO DE PRODUCTO: </h6>
                                                        <div class="input-group">

                                                            <div class="col-md-12 container-fluid">
                                                                <select name="categoria" class="form-bg-inverse text-default border col-md-12" required>
                                                                    <option disabled selected>Selecciona el tipo de producto</option>
                                                                    <option value="Laptop">LAPTOP</option>
                                                                    <option value="Desktop">DESKTOP</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6>MARCA & MODELO: </h6>
                                                        <div class="input-group">
                                                            <input type="text" name="marca_modelo" class="form-control form-bg-inverse text-default border" placeholder="..." required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6>PRECIO: </h6>
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="precio"><i class="ti-money"></i></span>
                                                            <input type="number" id="precio" name="precio" step="0.01" min="0" class="form-control form-bg-inverse text-default border" placeholder="00,00" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6>CANTIDAD: </h6>
                                                        <div class="input-group">
                                                            <input type="number" name="cantidad" class="form-control form-bg-inverse text-default border" placeholder="00" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6>IMAGEN DE PRODUCTO: </h6>
                                                        <div class="input-group">
                                                            <input type="file" name="imagen" class="form-control form-bg-inverse text-default border" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6>FECHA DE REGISTRO: </h6>
                                                        <div class="input-group">
                                                            <input type="date" name="fecha_reg" class="form-control form-bg-default text-inverse border" placeholder="fecha de registro" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 text-left">
                                                        <h6>DESCRIPCION DEL EQUIPO: </h6>
                                                        <h6 class="text-left"><span id="email">NOTA: Puedes colocar un breve resumen o descripcion del equipo.</span></h6>
                                                        <div class="input-group">
                                                            <textarea rows="5" cols="5" class="form-control form-bg-inverse text-default border" name="descripcion" placeholder=""></textarea><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="text-left"><b>IMPORTANTE: </b> Colocar todos los datos lo mas precisos posibles para el registro de tus equipos. <br> En <b>Fecha de Registro</b> colocar la fecha en la que se esta registrando el producto</h6> <br>
                                                <div class="text-center">
                                                    <button type="submit" name="registrar" class="btn btn-primary btn-round"><i class="ti-save-alt"></i>REGISTRAR</button>
                                                    <button type="submit" name="actualizar" class="btn btn-info btn-round"><i class="ti-pencil-alt"></i>ACTUALIZAR</button>
                                                </div>
                                            </form>
                                            <?php
                                            // INSERT DE REGISTROS
                                            if (isset($_POST["registrar"])) {
                                                mysqli_set_charset($mysqli, "utf8");
                                                // Obtener los datos del formulario
                                                $categoria = $_POST["categoria"];
                                                $marca_modelo = $_POST["marca_modelo"];
                                                $precio = $_POST["precio"];
                                                $cantidad = $_POST["cantidad"];
                                                $fecha_reg = $_POST["fecha_reg"];
                                                $descripcion = $_POST["descripcion"];
                                                $id_empresa = $_POST["id_empresa"];

                                                // Obtener la ruta de la imagen cargada
                                                if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
                                                    $imagen = $_FILES["imagen"]["name"];
                                                    $ruta_imagen = "imagenes/productos/compu/" . $empresa . "-" . $marca_modelo . ".jpg";
                                                    move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_imagen);
                                                } else {
                                                    $ruta_imagen = "";
                                                }

                                                // Insertar los datos en la tabla de la base de datos
                                                $query = "INSERT INTO computadora (id_empresa, categoria, marca_modelo, precio, cantidad, imagen, fecha_reg, descripcion) VALUES ('$id_empresa', '$categoria', '$marca_modelo', $precio, $cantidad, '$ruta_imagen', '$fecha_reg', '$descripcion')";
                                                $resul = mysqli_query($mysqli, $query);

                                                // Verificar si la inserción fue exitosa
                                                if ($resul) {
                                            ?>
                                                    <br>
                                                    <h6 class="text-center"><label class="label label-inverse-success">
                                                            <?php
                                                            echo "Se ha registrado el producto con exito";

                                                            ?>
                                                        </label></h6>
                                                <?php
                                                } else {
                                                ?>
                                                    <br>
                                                    <h6 class="text-center"><label class="label label-inverse-danger">
                                                            <?php
                                                            echo "No se ha podido registrar el producto";

                                                            ?>
                                                        </label></h6>
                                            <?php
                                                }
                                            }
                                            // UPDATE DE REGISTROS
                                            if (isset($_POST["actualizar"])) {
                                                // Obtener los datos del formulario
                                                $categoria = $_POST["categoria"];
                                                $marca_modelo = $_POST["marca_modelo"];
                                                $precio = $_POST["precio"];
                                                $cantidad = $_POST["cantidad"];
                                                $fecha_reg = $_POST["fecha_reg"];
                                                $descripcion = $_POST["descripcion"];
                                                $id_empresa = $_POST["id_empresa"];

                                                // Obtener la ruta de la imagen cargada
                                                if (isset($_FILES["imagen"]) && $_FILES["imagen"]["error"] == 0) {
                                                    $imagen = $_FILES["imagen"]["name"];
                                                    $ruta_imagen = "ruta/de/la/imagen/" . $imagen;
                                                    move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta_imagen);

                                                    // Actualizar la imagen en la base de datos
                                                    mysqli_query($mysqli, "UPDATE computadora SET imagen = '$ruta_imagen' WHERE id = $id_computadora");
                                                }

                                                // Actualizar los demás datos en la base de datos
                                                $query = "UPDATE computadora SET categoria = '$categoria', marca_modelo = '$marca_modelo', precio = $precio, cantidad = $cantidad, fecha_reg = '$fecha_reg', descripcion = '$descripcion' WHERE id = $id_computadora";
                                                $resul = mysqli_query($mysqli, $query);

                                                // Verificar si la actualización fue exitosa
                                                if ($resul) {
                                                    echo "Se ha actualizado la información de la computadora correctamente.";
                                                } else {
                                                    echo "Error al actualizar la información de la computadora.";
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