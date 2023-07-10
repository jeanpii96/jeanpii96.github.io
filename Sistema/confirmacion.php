<?php
require "conexion.php";

$empresa = $_POST["empresa"];
$usuario_emp = $_POST["usuario"];
$instagram = $_POST["instagram"];
$whatsapp = $_POST["whatsapp"];
$pagina_web = $_POST["pagina_web"];

$imagen = $_FILES['imagen_emp'];
$tmp_name = $imagen['tmp_name'];
$dire_destino = "imagen_prueba/foto-perfil/" . $empresa . ".jpg";

$img_file = $imagen['name'];
$img_type = $imagen['type'];

// Verificar si se ha cargado un archivo de imagen
if ($img_file != '') {
    // Usar la imagen cargada
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
        $destino = $dire_destino;
        mysqli_query($mysqli, "INSERT INTO empresas (empresa, representante, instagram, whatsapp, pagina_web, imagen) VALUES ('$empresa', '$usuario_emp', '$instagram', '$whatsapp', '$pagina_web', '$destino') ;");
        if (move_uploaded_file($tmp_name, $destino)) {
        }
    }
} else {
    // Usar la imagen predeterminada
    $default_image = "recursos/images/perfil.jpg";
    $destino = $dire_destino;
    mysqli_query($mysqli, "INSERT INTO empresas (empresa, representante, instagram, whatsapp, pagina_web, imagen) VALUES ('$empresa', '$representante', '$instagram', '$whatsapp', '$pagina_web', '$destino') ;");
    copy($default_image, $destino);
}

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
                <img src="recursos/images/logotipo.png" width="140" height="120" class="align-right">
                <div class="input-group">

                    <h2 class="text-primary">
                        HAS SIDO REGISTRADO CON EXITO
                    </h2>
                </div>
                <label class="label "><a href="login.php">
                        <button class="btn btn-default bg-default btn-sm btn-round">Iniciar Sesión <i class="ti-home"></i></a></button>
                </label>

                <!-- Pie de Pagina y Mensaje de error -->
                <div class="row">
                    <div class="col-md-12">
                        <hr />
                        <b>&copy; 2023 MaryJean TECH</b> - Derechos reservados para esta <b>Tesis</b></p>
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