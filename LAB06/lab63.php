<?php include("class/class_lib.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #31">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 6.3</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="assets/ico/favicon.ico" />
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- ESTILO PARA ALERTAS CON SWEET ALERT 2 -->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 300px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- CARGAR ENLACES A JAVASCRIPT -->
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.js"></script>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mx-bg-top-linear">
            <a class="navbar-brand text-uppercase" rel="nofollow" target="_blank" href="#">
                <img src="assets/ico/favicon.ico" width="32" height="32" class="d-inline-block align-top" alt="Logo">
                Dev Soft 7 - 2023
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-2">DS7 - Laboratorio 6.3</h1>
                <p class="lead">Crear c&oacute;digo PHP que instanciar&aacute; los objetos de las clases creadas.</p>
                <hr class="my-1">
            </div>
        </div>
        <div class="container">
            <div class="row p-1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="container">
                        <div class="row">
                            <div class='jumbotron1 border border-white col-md-12'>
                                <h2 class="display-6">RESULTADO CONSEGUIDO</h2>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div class="jumbotron2 bg-info border border-white">
                                                    <h4 class="display-6 p-1 mb-2 mt-2 bg-primary text-white">Ejemplo de uso de la clase padre</h4>
                                                    <?php
                                                    /**
                                                     ** Descripcion del lab63.php
                                                     * @author WCcorp
                                                     ** Laboratorio 6.3: ////Ejemplo de uso de la clase padre.
                                                     **/
                                                    $soporte1 = new soporte("The Soccer Game", 22, 3);
                                                    echo "<dl class='row mt-3 mb-0 text-left'>";
                                                    echo "<dt class='col-sm-5 ml-3'>Titulo Soporte: </dt>";
                                                    echo "<dd class='col-sm-6'>" . $soporte1->titulo . "</dd>";
                                                    echo "</dl>";
                                                    echo "<dl class='row mb-0 text-left'>";
                                                    echo "<dt class='col-sm-5 ml-3'>Precio: </dt>";
                                                    echo "<dd class='col-sm-6'>" . $soporte1->dame_precio_sin_itbm() . " dolares.</dd>";
                                                    echo "</dl>";
                                                    echo "<dl class='row mb-0 text-left'>";
                                                    echo "<dt class='col-sm-5 ml-3'>Precio ITBM incluido: </dt>";
                                                    echo "<dd class='col-sm-6'>" . $soporte1->dame_precio_con_itbm() . " dolares.</dd>";
                                                    echo "</dl>";
                                                    ?>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="jumbotron2 bg-info border border-white">
                                                    <h4 class="display-6 p-1 mb-2 mt-2 bg-success text-white">Ejemplo de uso de la clase hija 1</h4>
                                                    <?php
                                                    /**
                                                     ** Descripcion del lab63.php
                                                     * @author WCcorp
                                                     ** Laboratorio 6.3: ////Ejemplo de uso de la clase hija 1.
                                                     **/
                                                    $mivideo = new video("Los Otros", 22, 4.5, " 115 minutos");
                                                    echo "<dl class='row mt-3 mb-0 text-left'>";
                                                    echo "<dt class='col-sm-5 ml-3'>Titulo Video: </dt>";
                                                    echo "<dd class='col-sm-6'>" . $mivideo->titulo . "</dd>";
                                                    echo "</dl>";
                                                    echo "<dl class='row mb-0 text-left'>";
                                                    echo "<dt class='col-sm-5 ml-3'>Precio: </dt>";
                                                    echo "<dd class='col-sm-6'>" . $mivideo->dame_precio_sin_itbm() . " dolares.</dd>";
                                                    echo "</dl>";
                                                    echo "<dl class='row mb-0 text-left'>";
                                                    echo "<dt class='col-sm-5 ml-3'>Precio ITBM incluido: </dt>";
                                                    echo "<dd class='col-sm-6'>" . $mivideo->dame_precio_con_itbm() . " dolares.</dd>";
                                                    echo "</dl>";
                                                    echo "<br>" . $mivideo->imprime_caracteristicas() . "<br>";
                                                    ?>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <div class="jumbotron2 bg-info border border-white">
                                                    <h4 class="display-6 p-1 mb-2 mt-2 bg-dark text-white-50">Ejemplo de uso de la clase hija 2</h4>
                                                    <?php
                                                    /**
                                                     ** Descripcion del lab63.php
                                                     * @author WCcorp
                                                     ** Laboratorio 6.3: ////Ejemplo de uso de la clase hija 2.
                                                     **/
                                                    $mijuego = new juego("Pes 18", 21, 2.5, "PS 4", 1, 2);
                                                    $mijuego->imprime_caractersticas();
                                                    $mijuego->imprime_jugadores_posibles();

                                                    $mijuego2 = new juego("Fifa 18", 27, 3, "PS 4", 1, 2);
                                                    echo "<p>";
                                                    echo "<b class='text-white bg-danger'>" . $mijuego2->titulo . "</b>";  //bg-danger bg-gradient-primary
                                                    $mijuego2->imprime_jugadores_posibles();
                                                    echo "</p>";
                                                    ?>
                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr class="my-4">
                                <blockquote class="blockquote text-center">
                                    <footer class="display-4 blockquote-footer text-white">DS VII</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
    </main>
    <footer class="wcfooter mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">
                <b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>
                    Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </span>
        </div>
    </footer>
</body>

</html>