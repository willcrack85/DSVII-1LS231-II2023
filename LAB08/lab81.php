<?php include("class\\class_lib.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #42">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 8.1</title>
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
                <h1 class="mt-2">DS7 - Laboratorio 8.1</h1>
                <p class="lead">
                    Crear una aplicaci&aacute;on web en la cual se puedan elegir 3 imagenes de manera dinamica dependiendo del valor introducido por el usuario, este ser&aacute; un indicador de desempe&ntilde;o en las ventas.
                </p>
                <hr class="my-1">
            </div>
        </div>
        <div class="container">
            <div class="row p-1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="container">
                        <div class="row">
                            <div class='jumbotron1 border border-white col-md-12'>
                                <h2 class="display-5">INDICADOR DE DESEMPE&Ntilde;O EN VENTAS</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div class="jumbotron2 bg-info border border-white p-2 m-1">
                                                    <form name='formularioDatos' method='post' action='lab81.php'>
                                                        <?php
                                                        if (array_key_exists('btnEnviar', $_POST)) {
                                                            $Resultado = (int)$_POST['txtValor'];
                                                            $objVenta = new miClase_WC($Resultado);
                                                            echo "<div class='input-group mt-1 mb-1'>";
                                                            if ($_REQUEST['txtValor'] != "") {
                                                                if ($_REQUEST['txtValor'] >= 0 && $_REQUEST['txtValor'] <= 100) {
                                                                    if (is_int($Resultado)) {
                                                                        echo "<div class='row mx-auto p-3'>";
                                                                        echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                                                                        echo "<div class='card text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                                                                        echo "<img src='" . $objVenta->calcVenta() . "' class='card-img-top' alt='WC'/>";
                                                                        echo "<div class='card-block'>";
                                                                        echo "<h4 class='card-title'>" . $objVenta->calcMsg() . "</h4>";
                                                                        echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[txtValor]</p>";
                                                                        echo "</div></div></div>";
                                                                        echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                                                                        echo "<div class='card text-white bg-transparent border-light mb-3' style='width:auto; margin: auto'>";
                                                                        echo "<img src='" . $objVenta->calcVenta() . "' class='card-img-top' alt='WC'/>";
                                                                        echo "<div class='card-block'>";
                                                                        echo "<h4 class='card-title'>" . $objVenta->calcMsg() . "</h4>";
                                                                        echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[txtValor]</p>";
                                                                        echo "</div></div></div>";
                                                                        echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                                                                        echo "<div class='card .img-fluid text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                                                                        echo "<img src='" . $objVenta->calcVenta() . "' class='card-img-top' alt='WC'/>";
                                                                        echo "<div class='card-block'>";
                                                                        echo "<h4 class='card-title'>" . $objVenta->calcMsg() . "</h4>";
                                                                        echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[txtValor]</p>";
                                                                        echo "</div></div></div></div>";
                                                                        echo "</div>";
                                                                        echo "<div class='form-group col-md-12'>";
                                                                        echo "<a class='btn btn-outline-info col-md-4 col-md-offset-4' href='lab81.php' role='button'>Repetir Operaci&oacute;n</a>";
                                                                        echo "</div>";
                                                                    } else {
                                                                        echo "<div class='input-group-prepend'>";
                                                                        echo "<span class='input-group-text'>WC</span>";
                                                                        echo "<span class='input-group-text'>% de Ventas de (0% a 100%)</span>";
                                                                        echo "</div>";
                                                                        echo "<input autofocus type='text' name='txtValor' placeholder='0 ~ 100' class='form-control text-center' id='wc-center' aria-describedby='inputGroup-sizing-lg'>";
                                                                        echo "<button class='btn btn-primary col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>";
                                                                        echo "</div>";
                                                                        echo "<div class='form-group text-center col-md-12 p-0'>";
                                                                        echo "<div class='alert alert-danger' role='alert'>";
                                                                        echo "<p class='h6 m-0'>El valor registrado no es entero, verificar...</p>";
                                                                        echo "</div></div>";
                                                                    }
                                                                } else {
                                                                    echo "<div class='input-group-prepend'>";
                                                                    echo "<span class='input-group-text'>WC</span>";
                                                                    echo "<span class='input-group-text'>% de Ventas de (0% a 100%)</span>";
                                                                    echo "</div>";
                                                                    echo "<input autofocus type='text' name='txtValor' placeholder='0 ~ 100' class='form-control text-center' id='wc-center' aria-describedby='inputGroup-sizing-lg'>";
                                                                    echo "<button class='btn btn-primary col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>";
                                                                    echo "</div>";
                                                                    echo "<div class='form-group text-center col-md-12 p-0'>";
                                                                    echo "<div class='alert alert-danger' role='alert'>";
                                                                    echo "<p class='h6 m-0'>El valor ingresado en el campo est&aacute; fuera de rango.</p>";
                                                                    echo "</div></div>";
                                                                }
                                                            } else {
                                                                echo "<div class='input-group-prepend'>";
                                                                echo "<span class='input-group-text'>WC</span>";
                                                                echo "<span class='input-group-text'>% de Ventas de (0% a 100%)</span>";
                                                                echo "</div>";
                                                                echo "<input autofocus type='text' name='txtValor' placeholder='0 ~ 100' class='form-control text-center' id='wc-center' aria-describedby='inputGroup-sizing-lg'>";
                                                                echo "<button class='btn btn-primary col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>";
                                                                echo "</div>";
                                                                echo "<div class='form-group text-center col-md-12 p-0'>";
                                                                echo "<div class='alert alert-danger' role='alert'>";
                                                                echo "<p class='h6 m-0'>No agregó ningún porcentaje, el campo est&aacute; en blanco.</p>";
                                                                echo "</div></div>";
                                                            }
                                                        } else { ?>
                                                            <div class="input-group mt-1 mb-1">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">WC</span>
                                                                    <span class="input-group-text">% de Ventas de (0% a 100%)</span>
                                                                </div>
                                                                <input autofocus type="text" name="txtValor" placeholder='0 ~ 100' class="form-control text-center" id="wc-center" aria-describedby="inputGroup-sizing-lg">
                                                                <button class='btn btn-primary col-md-4 col-md-offset-4' type='submit' name="btnEnviar">Enviar</button>
                                                            </div>
                                                        <?php } ?>
                                                    </form>
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