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
    <section class="login p-fixed d-flex text-center fondo common-img-bg">

        <div class="signup-card card-block auth-body mr-auto ml-auto">
            <div class="auth-box">
                <div class="input-group">
                    <small class="text-left">
                        <a href="index.php">
                            <label class="label label-warning"><i class="ti-home"></i> INICIO</label>
                        </a>
                    </small>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-7 text-center">
                        <h3>
                            <b class="text-c-blue align-bottom">CREA TU CUENTA</b>
                        </h3>
                    </div>
                    <div class="col-md-2">
                        <img src="recursos/images/logotipo.png" width="100" height="80" class="align-right">
                    </div>
                </div>
                <form method="post" action="registrar.php" class="md-float-material" autocomplete="off">
                    <hr />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon" id="nombre"><i class="ti-id-badge"></i></span>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="NOMBRE" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon" id="usuario"><i class="ti-user"></i></span>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="USUARIO" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon" id="email"><i class="ti-email"></i></span>
                                <input type="text" class="form-control" name="correo" id="correo" placeholder="CORREO" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon" id="password"><i class="ti-unlock"></i></span>
                                <input type="password" class="form-control" name="password" id="password" placeholder="CONTRASEÑA" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <h6 class="text-center">QUIERES OFRECER PRODUCTOS: </h6>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="radio" class="form-control" name="tipo_usuario" id="tipo_usuario" value="empresa">SI
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <input type="radio" class="form-control" name="tipo_usuario" id="tipo_usuario" value="simple" checked>NO
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="col-sm-12 text-center">
                            <button class="btn btn-default bg-primary btn-xl btn-round">REGISTRARSE</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <hr />
                        <p class="text-inverse text-center m-b-0"><b>&copy; 2023 MaryJean TECH</b> - Derechos reservados para esta <b>Tesis</b></p>
                        <p class="text-inverse text-center"><b>IMPORTANTE: </b>Indicar si eres empresa para mostrar tus productos</p>
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