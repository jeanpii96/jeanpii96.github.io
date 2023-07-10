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

    <div class="container-fluid">

        <?php
        require "conexion.php";



        // Consulta los datos de la tabla
        $sql = "SELECT id, id_empresa, marca_modelo, descripcion, precio, fecha_reg, cantidad, imagen FROM accesorio";
        $resultado = mysqli_query($mysqli, $sql);

        // Si hay datos, crea la tabla HTML
        if (mysqli_num_rows($resultado) > 0) {
            echo "<table>";
            echo "<tr><th>imagen</th><th>ID</th><th>id_empresa</th><th>marca_modelo</th><th>descripcion</th><th>precio</th><th>fecha_reg</th><th>cantidad</th></tr>";
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr><td>" . "<img src='" . $fila['imagen'] . "' width='100' height='100'/> " . "</td><td>" . $fila["id"] . "</td><td>" . $fila["id_empresa"] . "</td><td>" . $fila["marca_modelo"] . "</td><td>" . $fila["descripcion"] . "</td><td>" . $fila["precio"] . "</td><td>" . $fila["fecha_reg"] . "</td><td>" . $fila["cantidad"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }


        ?>
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