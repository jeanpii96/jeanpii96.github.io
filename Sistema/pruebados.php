<!-- PROBAR PARA INSERTA IMAGEN PREDETERMINADA Y UPDATE DE IMAGEN-->

<?php
$mysqli = new mysqli("localhost", "root", "", "prueba");

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
                <form method="post" action="pruebatres.php" class="form-horizontal" enctype="multipart/form-data">
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

        // Obtener la imagen en formato binario
        $ruta_imagen = "recursos/images/perfil.jpg";
        $imagen_binaria = file_get_contents($ruta_imagen);

    // Obtener la imagen en formato binario
    $imagen_binaria = file_get_contents($_FILES['imagen']['tmp_name']);

    // Preparar la consulta SQL con una consulta preparada
    $stmt = $mysqli->prepare("INSERT INTO empresas (empresa, representante, instagram, whatsapp, pagina_web, imagen) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssb", $empresa, $representante, $instagram, $whatsapp, $pagina_web, $imagen_binaria);

    if ($stmt->execute()) {
        $sql_fotos = "SELECT id, empresa, representante, instagram, whatsapp, pagina_web, imagen FROM empresas";
        $res = mysqli_query($mysqli, $sql_fotos);
        while ($fila = mysqli_fetch_assoc($res)) {
            echo "<img src='data:image/jpeg;base64," . base64_encode($fila["imagen"]) . "' class='img-radius' alt='User-Profile-Image'/>";
        }
    }
}
?>
<!-- HASTA AQUI PARA REGISTRAR.PHP -->