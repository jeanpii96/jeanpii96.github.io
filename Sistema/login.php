<?php
require "conexion.php";
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
    <!-- Estilo de fondo -->
    <style>
        .fondo {
            background-image: linear-gradient(to left, #868f96 0%, #282a2b 100%);
        }
    </style>

    <title>MaryJean TECH</title>
</head>

<body>
    <section class="login p-fixed d-flexcommon-img-bg fondo">
        <!-- Tarjeta de Login -->
        <div class="login-card auth-body mr-auto ml-auto">
            <div class="auth-box card-block">
                <div class="input-group">
                    <small class="text-left">
                        <a href="index.php">
                            <label class="label label-warning"><i class="ti-home"></i>  INICIO</label>
                        </a>
                    </small>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-7 text-center">
                        <h3>
                            <b class="text-c-blue align-bottom">INICIAR SESIÓN</b>
                        </h3>
                    </div>
                    <div class="col-md-3">
                        <img src="recursos/images/logotipo.png" width="100" height="80" class="align-right">
                    </div>
                </div>
                <!-- Formulario -->
                <form class="md-float-material" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                    <hr />
                    <div class="input-group">
                        <span class="input-group-addon" id="usuario"><i class="ti-user"></i></span>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="USUARIO" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="password"><i class="ti-lock"></i></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="CONTRASEÑA" required>
                    </div>
                    <div class="input-group">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-default bg-primary btn-xl btn-round">ACCEDER</button>
                        </div>
                    </div>
                </form>
                <!-- Links de opciones -->
                <div class="input-group">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <a href="recuperar.php" class="btn btn-link"><b>¿Olvidaste tu contraseña?</b></a>
                        </div>
                        <div class="col-sm-12 text-center">
                            <a href="registrarse.php" class="btn btn-link"><b>¿No tienes una cuenta? Regístrate aquí</b></a>
                        </div>
                    </div>
                </div>

                <!-- Pie de Pagina y Mensaje de error -->
                <div class="row">
                    <div class="col-md-12">

                        <?php
                        if ($_POST) {
                            $usuario = $_POST['usuario'];
                            $password = $_POST['password'];

                            $sql = "SELECT id, nombre, usuario, clave, correo, tipo_usuario, imagen FROM usuarios WHERE usuario='$usuario'";
                            $resultado = $mysqli->query($sql);
                            $num = $resultado->num_rows;
                            if ($num > 0) {
                                $row = $resultado->fetch_assoc();
                                $password_bd = $row['clave'];
                                if ($password_bd == $password) {
                                    $_SESSION['id'] = $row['id'];
                                    $_SESSION['nombre'] = $row['nombre'];
                                    $_SESSION['usuario'] = $row['usuario'];
                                    $_SESSION['correo'] = $row['correo'];
                                    $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
                                    $_SESSION['imagen'] = $row['imagen'];
                                    header("Location:menu.php");
                                } else {
                        ?>
                                    <label class="label label-danger text-center"><b class="text-inverse">Usuario o Contraseña no son correctos</b></label>

                                <?php

                                }
                            } else {
                                ?>
                                <label class="label label-danger text-center"><b class="text-inverse">No existe usuario</b></label>
                        <?php
                            }
                        }
                        ?>
                        <hr />
                        <p class="text-inverse text-center m-b-0"><b>&copy; 2023 MaryJean TECH</b> - Derechos reservados para esta <b>Tesis</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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