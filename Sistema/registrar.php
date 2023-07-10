<?php
//Trae la conexion de la base de datos
require "conexion.php";

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$tipo_usuario = $_POST['tipo_usuario'];

// Usar la imagen predeterminada
$dire_destino = "imagen_prueba/foto-perfil/" . $usuario . ".jpg";
$default_image = "recursos/images/perfil.jpg";
$destino = $dire_destino;

mysqli_query($mysqli, "INSERT INTO fotos (id_usuario, nombre, correo, imagen) VALUES ('$usuario', '$nombre', '$correo','$destino');");
copy($default_image, $destino);


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
        <?php



        if ($tipo_usuario == 'empresa') {
            // Realizar consulta SQL para empresas
            $usuario_sql = "INSERT INTO usuarios (nombre, usuario, clave, correo, tipo_usuario) VALUES ('$nombre', '$usuario', '$password', '$correo', '$tipo_usuario')";
            if (mysqli_query($mysqli, $usuario_sql)) {
        ?>
                <div class="signup-card card-block auth-body mr-auto ml-auto">
                    <div class="auth-box">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-7 text-center">
                                <h3>
                                    <b class="text-c-blue align-bottom">REGISTRA TU EMPRESA</b>
                                </h3>
                            </div>
                            <div class="col-md-2">
                                <img src="recursos/images/logotipo.png" width="100" height="80" class="align-right">
                            </div>
                        </div>
                        <!-- ACOMODAR FORMULARIO -->
                        <form method="post" action="confirmacion.php" class="md-float-material" enctype="multipart/form-data" autocomplete="off">
                            <hr />
                            <div class="input-group">
                                <input type="hidden" name="usuario" value="<?php echo $usuario ?>"> <!-- USUARIO AGG -->
                                <span class="input-group-addon" id="empresa"><i class="ti-bag"></i></span>
                                <input type="text" class="form-control bg-inverse text-default" name="empresa" id="empresa" placeholder="NOMBRE DE EMPRESA" required>
                            </div>
                            <h6><b>REDES SOCIALES:</b></h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="instagram"><i class="ti-instagram"></i></span>
                                        <input type="text" class="form-control bg-inverse text-default" name="instagram" id="instagram" placeholder="INSTAGRAM" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="whatsapp"><i class="ti-mobile"></i></span>
                                        <input type="text" class="form-control bg-inverse text-default" name="whatsapp" id="whatsapp" placeholder="WHATSAPP" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="pagina_web"><i class="ti-world"></i></span>
                                        <input type="text" class="form-control bg-inverse text-default" name="pagina_web" id="pagina_web" placeholder="PAGINA WED">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="pagina_web"><i class="ti-gallery"></i></span>
                                <span class="input-group-addon bg-inverse" id="pagina_web">Logo o Foto de Empresa:</span>
                                <input type="file" accept="image/*" class="form-control bg-inverse text-default" name="imagen_emp" id="imagen_emp">
                            </div>
                            <div class="input-group">
                                <div class="col-sm-12 text-center">
                                    <button class="btn btn-default bg-primary btn-xl btn-round">REGISTRAR</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr />
                                <p class="text-inverse text-center m-b-0"><b>&copy; 2023 MaryJean TECH</b> - Derechos reservados para esta <b>Tesis</b></p>
                                <small class="text-inverse text-center">
                                    <b>IMPORTANTE: </b>Colocar el <i>"URL"</i> o el <i>"LINK"</i> de tus redes y pagina para que te puedan ubicar más rápido.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        } else if ($tipo_usuario == 'simple') {
            // Realizar consulta SQL para usuarios simples
            $usuario_simple = "INSERT INTO usuarios (nombre, usuario, clave, correo, tipo_usuario) VALUES ('$nombre', '$usuario', '$password', '$correo', '$tipo_usuario')";
            if (mysqli_query($mysqli, $usuario_simple)) {
                header("Location:confirm_simple.php");
            }
        }
        ?>
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