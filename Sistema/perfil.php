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

                    <!-- CONTENEDORES DE INFO -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <!-- PERFIL-->
                                    <div class="row">
                                        <!-- EDITAR FOTO DE PERFIL -->
                                        <div class="col-md-12 col-lg-4">
                                            <div class="card bg-inverse border-primary container-fluid">
                                                <div class="card-block text-center text-default">
                                                    <h5 class="text-default">FOTO DE PERFIL</h5>
                                                    <div class="card-block text-center container-fluid">
                                                        <?php
                                                        // Muestra las imágenes que pertenecen al usuario actual
                                                        echo "<img src='" . $foto_perfil . "' class='img-radius' alt='User-Profile-Image' width='100' height='100'/>";

                                                        ?>
                                                    </div>
                                                    <form form method="post" action="perfil.php" class="form-horizontal" enctype="multipart/form-data">
                                                        <label class="col-sm-12 col-form-label text-primary">
                                                            <h5><b>EDITAR</b></h5>
                                                        </label>
                                                        <div>
                                                            <input type="hidden" name="id_usuario" value="<?php echo $fila["id_usuario"]  ?>">
                                                            <input type="file" name="imagen_edit" class="form-control bg-inverse" accept="image/*">
                                                        </div>
                                                        <br>
                                                        <button type="submit" name="guardara" class="btn btn-success btn-round">
                                                            <h5>Guardar</h5>
                                                        </button>
                                                    </form>
                                                    <?php
                                                    if (isset($_POST["guardara"])) {
                                                        $id_usuario = $_POST['id_usuario'];

                                                        $imagen = $_FILES['imagen_edit'];
                                                        $tmp_name = $imagen['tmp_name'];
                                                        $dire_destino = "imagenes/foto-perfil/" . $id_usuario . ".jpg";

                                                        $img_file = $imagen['name'];
                                                        $img_type = $imagen['type'];

                                                        // Verificar si se ha cargado un archivo de imagen
                                                        if ($img_file != '') {
                                                            // Usar la imagen cargada
                                                            if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))) {

                                                                // Obtener la imagen anterior si existe
                                                                $imagen_anterior = mysqli_query($mysqli, "SELECT imagen FROM fotos WHERE id_usuario = '$id_usuario'");
                                                                $imagen_anterior = mysqli_fetch_array($imagen_anterior)['imagen'];

                                                                // Eliminar la imagen anterior si existe
                                                                if (file_exists($imagen_anterior)) {
                                                                    unlink($imagen_anterior);
                                                                }

                                                                $destino = $dire_destino;
                                                                mysqli_query($mysqli, "UPDATE fotos SET imagen = '$destino' WHERE id_usuario = '$id_usuario';");
                                                                if (move_uploaded_file($tmp_name, $destino)) {
                                                    ?>
                                                                    <br>
                                                                    <h6 class="text-center"><label class="label label-inverse-success">
                                                                            <?php
                                                                            echo "La imagen Ha sido cargada con exito";

                                                                            ?>
                                                                        </label></h6>
                                                            <?php
                                                                }
                                                            }
                                                        } else {

                                                            ?>
                                                            <br>
                                                            <h6 class="text-center"><label class="label label-inverse-danger">
                                                                    <?php
                                                                    echo "La imagen no se ha podido cargar";

                                                                    ?>
                                                                </label></h6>
                                                <?php
                                                        }
                                                    }
                                                ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- EDITAR USUARIOS DE PERFIL -->
                                        <div class="col-md-6 col-lg-8">
                                            <div class="card bg-inverse border-primary auth-body mr-auto ml-auto">
                                                <div class="card-block text-center text-default border-primary">
                                                    <h1>Editar Perfil</h1><small>NOTA: Colocar en clave actual, la que se tiene en vigencia para realizar algun cambio en los datos de su perfil</small><br><br>
                                                    <!-- Modificación de datos de usuario -->
                                                    <form class="md-float-material text-center" method="POST" action="perfil.php" autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-md-6 text-center">
                                                                <input type="hidden" name="id" value="<?php echo $id  ?>">
                                                                <h6 class="align-text-top">NOMBRE: </h6>
                                                                <div class="input-group">
                                                                    <input type="text" name="nombre" class="form-control form-bg-inverse text-default border" placeholder="...">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 align-middle">
                                                                <h6 class="align-text-top">CLAVE ACTUAL: </h6>
                                                                <div class="input-group">
                                                                    <input type="password" name="clave" class="form-control form-bg-inverse text-default border" placeholder="..." required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 text-center">
                                                                <h6 class="align-text-top">CORREO: </h6>
                                                                <div class="input-group">
                                                                    <input type="email" name="correo" class="form-control form-bg-inverse text-default border" placeholder="...">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 align-middle">
                                                                <h6 class="align-text-top">CLAVE NUEVA: </h6>
                                                                <div class="input-group">
                                                                    <input type="password" name="clave_nueva" class="form-control form-bg-inverse text-default border" placeholder="...">
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <button type="submit" name="guardarb" class="btn btn-success btn-round">
                                                            <h5>Guardar</h5>
                                                        </button>
                                                    </form>
                                                    <?php
                                                    if (isset($_POST["guardarb"])) {
                                                        ob_start();
                                                        // Obtener los datos del formulario
                                                        $id = $_POST["id"];
                                                        $nombre = $_POST["nombre"];
                                                        $clave = $_POST["clave"];
                                                        $correo = $_POST["correo"];
                                                        $clave_nueva = $_POST["clave_nueva"];

                                                        // Verificar si la clave ingresada coincide con la clave almacenada en la base de datos
                                                        $query = "SELECT clave, usuario FROM usuarios WHERE id='$id'";
                                                        $resultado = mysqli_query($mysqli, $query);
                                                        $fila = mysqli_fetch_assoc($resultado);
                                                        $clave_guardada = $fila["clave"];
                                                        $usuario = $fila["usuario"];

                                                        if ($clave != $clave_guardada) {
                                                    ?>
                                                            <br>
                                                            <h6 class="text-center"><label class="label label-inverse-success">
                                                                    <?php
                                                                    echo "La clave actual no coincide";

                                                                    ?>
                                                                </label></h6>
                                                    <?php
                                                        } else {
                                                            // Actualizar los datos en la tabla usuarios
                                                            $query = "UPDATE usuarios SET nombre='$nombre', correo='$correo'";
                                                            // Verificar si se ha ingresado una nueva contraseña y actualizarla si es así
                                                            if ($clave_nueva != '') {
                                                                $query .= ", clave='$clave_nueva'";
                                                            }

                                                            $query .= " WHERE id='$id'";

                                                            $resultado = mysqli_query($mysqli, $query);

                                                            if ($resultado) {
                                                                // Actualizar los datos en la tabla fotos
                                                                $query_fotos = "UPDATE fotos SET nombre='$nombre', correo='$correo' WHERE id_usuario='$usuario'";
                                                                $resultado_fot = mysqli_query($mysqli, $query_fotos);
                                                                echo "Los datos se han actualizado correctamente.";
                                                                ob_end_flush();
                                                                header("Location:salir.php");
                                                            } else {
                                                                echo "Ha ocurrido un error al actualizar los datos.";
                                                            }
                                                        }
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modificación de datos de Empresa -->
                                    <?php if ($tipo_usuario == 'empresa') { ?><!-- RESTRICCION PARA USUARIOS-->
                                        <div class="card page-header p-0 border-primary bg-inverse">
                                            <div class="card-block text-center text-default border-primary">
                                                <h1 class="text-c-blue">Editar Perfil de <b>Empresas</b></h1><br>
                                                <form method="POST" action="perfil.php" class="md-float-material text-center" enctype="multipart/form-data" autocomplete="off">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <h6 class="text-left text-default">NOMBRE DE EMPRESA: </h6>
                                                            <div class="input-group">
                                                                <input type="text" name="empresa" class="form-control form-bg-inverse text-default border" placeholder="..." required>
                                                            </div>
                                                            <?php
                                                            // Obtener el usuario actual
                                                            $query_user = "SELECT usuario FROM usuarios WHERE nombre='$nombre' AND id='$id'";
                                                            $resul_user = mysqli_query($mysqli, $query_user);
                                                            $fila_user = mysqli_fetch_assoc($resul_user);
                                                            $usuario = $fila_user["usuario"];
                                                            ?>
                                                            <input type="hidden" name="representante" value="<?php echo $usuario ?>">
                                                            <h6 class="text-left">LOGO DE EMPRESA: </h6>
                                                            <div class="input-group">
                                                                <input type="file" name="imagen_edit" class="form-control bg-inverse" accept="image/*" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h6 class="text-left">REDES SOCIALES: </h6>
                                                            <div class="input-group">
                                                                <input type="text" name="instagram" class="form-control form-bg-inverse text-default border" placeholder="...Instagram" required>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="text" name="whatsapp" class="form-control form-bg-inverse text-default border" placeholder="...Whatsapp" required>
                                                            </div>
                                                            <div class="input-group">
                                                                <input type="text" name="pagina_web" class="form-control form-bg-inverse text-default border" placeholder="...Pagina Web">
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <button type="submit" name="guardarc" class="btn btn-warning btn-round text-center">
                                                        <h5 class="text-default">Guardar</h5>
                                                    </button>
                                                </form>
                                                <?php
                                                if (isset($_POST["guardarc"])) {
                                                    // Obtener los datos del formulario
                                                    $representante = $_POST["representante"];
                                                    $pagina_web = $_POST["pagina_web"];
                                                    $empresa = $_POST["empresa"];
                                                    $instagram = $_POST["instagram"];
                                                    $whatsapp = $_POST["whatsapp"];

                                                    $imagen = $_FILES['imagen_edit'];
                                                    $tmp_name = $imagen['tmp_name'];
                                                    $dire_destino = "imagenes/foto-perfil/" . $empresa . ".jpg";

                                                    $img_file = $imagen['name'];
                                                    $img_type = $imagen['type'];


                                                    // Verificar si se ha cargado un archivo de imagen
                                                    if ($img_file != '') {
                                                        // Usar la imagen cargada
                                                        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))) {

                                                            // Obtener la imagen anterior si existe
                                                            $imagen_anterior = mysqli_query($mysqli, "SELECT imagen FROM empresas WHERE representante = '$representante'");
                                                            $imagen_anterior = mysqli_fetch_array($imagen_anterior)['imagen'];

                                                            // Eliminar la imagen anterior si existe
                                                            if (file_exists($imagen_anterior)) {
                                                                unlink($imagen_anterior);
                                                            }

                                                            $destino = $dire_destino;
                                                            if (move_uploaded_file($tmp_name, $destino)) {
                                                                // Actualizar la imagen en la tabla fotos
                                                                mysqli_query($mysqli, "UPDATE empresas SET imagen = '$destino' WHERE representante = '$representante'");
                                                            }
                                                        }

                                                        if ($representante) {

                                                            // Actualizar los datos en la tabla empresas
                                                            $query_emp = "UPDATE empresas SET empresa='$empresa', instagram='$instagram', whatsapp='$whatsapp', pagina_web='$pagina_web' WHERE representante='$representante'";
                                                            $resultado_emp = mysqli_query($mysqli, $query_emp);

                                                            if ($resultado_emp) {
                                                                ?>
                                                                <br>
                                                                <h6 class="text-center"><label class="label label-inverse-success">
                                                                        <?php
                                                                        echo "Se ha actualizado los datos con exito";

                                                                        ?>
                                                                    </label></h6>
                                                        <?php
                                                            } else {

                                                                ?>
                                                                <br>
                                                                <h6 class="text-center"><label class="label label-inverse-danger">
                                                                        <?php
                                                                        echo "No se han podido actualizar los datos";

                                                                        ?>
                                                                    </label></h6>
                                                        <?php
                                                            }
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    <?php } ?>

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