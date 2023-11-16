<?php include("class\\class_lib.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #43">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 8.2</title>
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
                <h1 class="mt-2">DS7 - Laboratorio 8.2</h1>
                <p class="lead">Llenar un arreglo unidimensional de 20 elementos, luego de llenar el arreglo mostrar en pantalla la
                    posici&oacute;n y el valor del elemento mayor almacenado en el arreglo. Todos los elementos deben ser diferentes.
                </p>
                <hr class="my-1">
            </div>
        </div>
        <div class="container">
            <div class="row p-1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="container">
                        <div class="row">
                            <div class='jumbotron1 border border-white col-md-12 pb-0'>
                                <div class="text-center shadow-lg p-3 m-2 bg-white text-primary rounded">MANEJO DE ARREGLOS P1</div>
                                <div class="jumbotron2 border border-white p-2 m-2 col-md-auto">
                                    <?php
                                    $objMayor = new miClase_WC1();
                                    $objMayor->imprimeTabla();
                                    ?>
                                </div>
                                <div class='jumbotron2 text-center border border-white col-md-auto px-0 m-2'>
                                    <?php $intRest = $objMayor->calcularMayor(); ?>
                                    <div class='form-group text-center col-md-auto mt-2'>
                                        <div class='alert alert-info' role='alert'>
                                            <p class='h4'>
                                                La posici&oacute;n [ <?php echo $intRest + 1; ?> ]<small class="text-muted"> tiene el valor m&aacute;s alto << <?php echo $objMayor->intVector[$intRest] ?>>></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group col-md-12 text-center'>
                                    <a class="btn btn-lg btn-secondary col-md-4 col-md-offset-4" href="lab82.php" role="button">Recargar</a>
                                </div>
                                <hr class="my-1">
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
                <b>Dise&ntilde;ado por
                    <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">
                        WC Solutions Corp.
                    </a>
                    Copyright &copy; DS 7 - 2023 | William Miranda
                </b>
            </span>
        </div>
    </footer>
</body>

</html>