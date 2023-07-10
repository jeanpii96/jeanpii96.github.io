<!-- PROBAR PARA INSERTA IMAGENES Y MOSTRAR -->

<?php
$mysqli = new mysqli("localhost", "root", "", "proyecto");

if ($mysqli->connect_error) {

    die('Error en la Conexion' . $mysqli->connect_error);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="recursos/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="recursos/styles.register.css">
    <title>MaryJean TECH</title>
</head>

<body>

    <div class="container-fluid custom-container d-flex flex-column justify-content-center">
        <!-- COPIAR DESDE AQUI PARA REGISTRAR.PHP -->
        <h2 class="text-center">REGISTRA TU EMPRESA</h2>
        <hr /><br>
        <div class="row">
            <div class="col-md-4">
                <form method="post" action="prueba.php" class="form-horizontal" enctype="multipart/form-data">
                    <div class="form-group ">
                        <div class="col-sm-12 text-center"><input type="text" class="form-control" name="representante" id="nombre" placeholder="REPRESENTANTE" value=""></div>
                    </div>
                    <div class="form-group ">
                        <div class="col-sm-12 text-center"><input type="text" class="form-control" name="empresa" id="usuario" placeholder="NOMBRE DE EMPRESA" required></div>
                    </div>
                    <div class="form-group">
                        <h6>REDES SOCIALES</h6>
                        <div class="col-sm-12 text-center"> <input type="text" class="form-control" name="instagram" id="correo" placeholder="INSTAGRAM"> </div>
                        <div class="col-sm-12 text-center"> <input type="text" class="form-control" name="whatsapp" id="correo" placeholder="WHATSAPP"> </div>
                        <div class="col-sm-12 text-center"> <input type="text" class="form-control" name="pagina_web" id="correo" placeholder="PAGINA WED"> </div>
                    </div>
                    <div class="form-group">
                        <h6>FOTO DE EMPRESA</h6>
                        <div class="col-sm-12 text-center"> <input type="file" accept="image/*" class="form-control" name="imagen" id="imagen"></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <button type="submit" class="btn btn-save btn-block" id="guardar">GUARDAR</button>
                            </div>
                            <?php
                            $query_user = "SELECT imagen FROM empresas";
                            $resul_user = mysqli_query($mysqli, $query_user);
                            $fila = mysqli_fetch_assoc($resul_user);
                            $usuario = $fila["imagen"];

                            echo "<img src='" . $fila["imagen"] . "' class='img-radius' alt='User-Profile-Image' width='100' height='100'/> <br>";
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- HASTA AQUI PARA REGISTRAR.PHP -->
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<!-- COPIAR DESDE AQUI PARA REGISTRAR.PHP -->
<?php
if ($_POST) {

    // Escapar caracteres especiales para evitar inyección SQL
    $empresa = $_POST["empresa"];
    $representante = "jeanv";
    $instagram = $_POST["instagram"];
    $whatsapp = $_POST["whatsapp"];
    $pagina_web = $_POST["pagina_web"];

    $imagen = $_FILES['imagen'];
    $tmp_name = $imagen['tmp_name'];
    $dire_destino = "imagen_prueba/foto-perfil/" . $empresa . ".jpg";

    $img_file = $imagen['name'];
    $img_type = $imagen['type'];

    // Verificar si se ha cargado un archivo de imagen
    if ($img_file != '') {
        // Usar la imagen cargada
        if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))) {
            $destino = $dire_destino;
            mysqli_query($mysqli, "INSERT INTO empresas (empresa, representante, instagram, whatsapp, pagina_web, imagen) VALUES ('$empresa', '$representante', '$instagram', '$whatsapp', '$pagina_web', '$destino') ;");
            if (move_uploaded_file($tmp_name, $destino)) {
                // Mostrar imagen
                echo "<img src='$destino'/>";
                return true;
            }
        }
    } else {
        // Usar la imagen predeterminada
        $default_image = "recursos/images/perfil.jpg";
        $destino = $dire_destino;
        mysqli_query($mysqli, "INSERT INTO empresas (empresa, representante, instagram, whatsapp, pagina_web, imagen) VALUES ('$empresa', '$representante', '$instagram', '$whatsapp', '$pagina_web', '$destino') ;");
        copy($default_image, $destino);
        // Mostrar imagen
        echo "<img src='$destino'/>";
        return true;
    }
}



?>