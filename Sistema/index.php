<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="recursos/images/favicon.ico" type="image/x-icon">
    <!-- Required Fremwork -->
    <link rel="stylesheet" href="recursos/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="recursos/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="recursos/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="recursos/css/style.css">
    <link rel="stylesheet" type="text/css" href="recursos/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="recursos/carrusel.css">

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
                </div>
            </nav>

            <!-- RESTO DE PAGINA -->
            <div class="pcoded-main-container fondo">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <!-- OPCIONES DE MENU -->
                        <div class="pcoded-inner-navbar main-menu bg-inverse text-default" id="mi-div">
                            <ul class="pcoded-item pcoded-left-item">
                                <!-- OPCIONES DE INICO -->
                                <!-- INICO -->
                                <li>
                                    <br>
                                    <a href="index.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-home"></i><b></b></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.form-components.main">INICIO</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- INICIAR SESION -->
                                <li>
                                    <a href="buscador.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-user"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">INICIAR SESION</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- REGISTRARSE -->
                                <li>
                                    <a href="registrarse.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-direction-alt"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">REGISTRARSE</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- CONTACTO -->
                                <li>
                                    <a href="contacto.php" class="bg-inverse">
                                        <span class="pcoded-micon text-default"><i class="ti-email"></i></span>
                                        <span class="pcoded-mtext text-default" data-i18n="nav.basic-components.main">CONTACTO</span>
                                        <span class="pcoded-mcaret"></span>
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

                                    <!-- TEXTO DE ENTRADA -->
                                    <div class="page-header card border-primary bg-inverse">
                                        <div class="card-block ">
                                            <h5 class="m-b-10 text-default">MaryJean TECH</h5>
                                            <p class="m-b-10 text-default">"La mejor manera de cuidar y promover tus equipos"</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php"><i class="icofont icofont-home text-primary"></i></a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!" class="text-default">Inicio</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!" class="text-default">Nosotros</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="recursos\images/logo_empresa.jpg" class="img-fluid">
                                                </div>
                                                <div class="col-md-9">
                                                    <blockquote class="blockquote">
                                                        <center>
                                                            <h4 class="text-default">"Somos un <b><i>Sistema Web</i></b> dirigido a ofrecer servicios de orientación en base en la tecnologia y en pro de resguardar tu negocio, ofreciendo herramientas para el inventariado de equipos y tu clientes busquen su mejor tus productos en el mercado".</h4>
                                                        </center>
                                                    </blockquote>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARRUSEL-->
                                    <div class="card page-header p-0 border-primary">
                                        <div class="card-block col-md-12 text-default bg-inverse">
                                            <!-- ACOMODAR CARRUSEL-->
                                            <div class="carousel">
                                                <div class="carousel-inner ">
                                                    <div class="carousel-item active">
                                                        <img src="https://via.placeholder.com/800x400?text=Slide+1" alt="Slide 1">
                                                        <div class="carousel-caption">
                                                            <h3>Slide 1</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://via.placeholder.com/800x400?text=Slide+2" alt="Slide 2">
                                                        <div class="carousel-caption">
                                                            <h3>Slide 2</h3>
                                                            <p>Nulla nec turpis vitae lectus aliquet pellentesque.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img src="https://via.placeholder.com/800x400?text=Slide+3" alt="Slide 3">
                                                        <div class="carousel-caption">
                                                            <h3>Slide 3</h3>
                                                            <p>Donec auctor magna eget ligula euismod, sed dictum velit porttitor.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- CARTAS DE OPCIONES-->
                                    <div class="row">
                                        <!-- SOCIAL -->
                                        <!-- FACEBOOK -->
                                        <div class="col-md-12 col-lg-4">
                                            <div class="card bg-inverse border-primary">
                                                <div class="card-block text-center text-default">
                                                    <i class="ti-facebook d-block f-40"></i>
                                                    <h4 class="m-t-20">FACEBOOK</h4>
                                                    <p class="m-b-20">SIGUENOS</p>
                                                    <a href="https://es-la.facebook.com/" target="_blank"><button class="btn btn-default bg-facebook btn-sm btn-round">SEGUIR</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- INSTAGRAM -->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card bg-inverse border-primary">
                                                <div class="card-block text-center text-default">
                                                    <i class="ti-instagram d-block f-40"></i>
                                                    <h4 class="m-t-20">INSTAGRAM</h4>
                                                    <p class="m-b-20">SIGUENOS</p>
                                                    <a href="https://twitter.com/Twitter" target="_blank"><button class="btn btn-default bg-viber btn-sm btn-round">SEGUIR</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TWITTER-->
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card bg-inverse border-primary">
                                                <div class="card-block text-center text-default">
                                                    <i class="ti-twitter-alt d-block f-40"></i>
                                                    <h4 class="m-t-20">TWITTER</h4>
                                                    <p class="m-b-20">SIGUENOS</p>
                                                    <a href="https://www.instagram.com/" target="_blank"><button class="btn bg-twitter btn-sm btn-round">SEGUIR</button></a>
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

    <script src="recursos/js/jquery.min.js"></script>
    <script src="recursos/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000
            })
        });
    </script>

</body>

</html>