<?php
include("class\\class_lib.php");
$objMatriz = new miClase_WC2();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #44">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 8.3</title>
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
                <h1 class="mt-2">DS7 - Laboratorio 8.3</h1>
                <p class="lead">
                    Llenar un arreglo solo con n&uacute;meros pares. Si se introduce un n&uacute;umero impar, solicitar al usuario introduzca un valor correcto hasta que as&iacute; sea; luego continuar con el siguiente n&uacute;mero.
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
                                <div class="text-center shadow-lg p-3 mb-2 m-2 bg-white text-primary rounded">MANEJO DE ARREGLOS P1</div>
                                <form name='formularioDatos' method='post' action='lab83.php'>
                                    <div class="jumbotron2 border border-white p-3 m-2 mb-0">
                                        <?php
                                        if (array_key_exists('btnEnviar', $_POST)) {
                                            $intValorPar = null;
                                            $intContador = $_POST['hdnConteo'];
                                            echo "<div class='input-group mt-1 mb-1' pb-0>";
                                            if ($_REQUEST['txtRegistro'] != "") {
                                                if ($_REQUEST['txtRegistro'] % 2 == 0) {
                                                    $intValorPar = $objMatriz->guardarCadena($_POST['txtRegistro'], $_POST['hdnNumeroPar']);
                                                    if ($_REQUEST['hdnConteo'] < 9) {
                                                        $intContador += 1;
                                                        echo "<div class='input-group-prepend'>";
                                                        echo "<span class='input-group-text'>WC</span>";
                                                        echo "<span class='input-group-text'>Introdusca un N&uacute;mero correcto :</span>";
                                                        echo "</div>";
                                                        echo "<input autofocus type='text' name='txtRegistro' placeholder='n&uacute;mero par' class='form-control text-center' id='wc-center' aria-describedby='inputGroup-sizing-lg'>";
                                                        echo "<input type='hidden' name='hdnConteo' value='$intContador'>";
                                                        echo "<input type='hidden' name='hdnNumeroPar' value='$intValorPar'>";
                                                        echo "<button class='btn btn-outline-success col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>";
                                                        echo "<div class='form-group text-center col-md-12 mb-0 p-0'>";
                                                        echo "<br><h5>&#128513; Ingresaste un valor par, te quedan faltante (", 9 - $_REQUEST['hdnConteo'], ")...</h5>";
                                                        echo "</div>";
                                                    } else {
                                                        echo "<div class='input-group-prepend'>";
                                                        echo "<span class='input-group-text'>WC</span>";
                                                        echo "<span class='input-group-text'>Introdusca un N&uacute;mero correcto :</span>";
                                                        echo "</div>";
                                                        echo "<input autofocus type='text' name='txtRegistro' placeholder='n&uacute;mero par' class='form-control text-center' id='wc-center' aria-describedby='inputGroup-sizing-lg' readonly>";
                                                        echo "<button class='btn btn-outline-primary col-md-4 col-md-offset-4' type='submit' name='btnEnviar' disabled>Enviar</button>";
                                                        echo "<div class='form-group text-center col-md-12 mb-0 p-0'>";
                                                        echo "<br><h5>&#9757;&#127995;&#128526; Se complet&oacute; el total de ingreso requeridos a 9 &#129488;!</h5>";
                                                        echo "</div>";
                                                    }
                                                } else {
                                                    $intValorPar = $_POST['hdnNumeroPar'];
                                                    echo "<div class='input-group-prepend'>";
                                                    echo "<span class='input-group-text'>WC</span>";
                                                    echo "<span class='input-group-text'>Introdusca un N&uacute;mero correcto :</span>";
                                                    echo "</div>";
                                                    echo "<input autofocus type='text' name='txtRegistro' placeholder='0 ~ 9' class='form-control text-center' id='wc-center' aria-describedby='inputGroup-sizing-lg'>";
                                                    echo "<input type='hidden' name='hdnConteo' value='$intContador'>";
                                                    echo "<input type='hidden' name='hdnNumeroPar' value='$intValorPar'>";
                                                    echo "<button class='btn btn-outline-danger col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>";
                                                    echo "<div class='form-group text-center col-md-12 mb-0 p-0'>";
                                                    echo "<br><h5>&#128545; El N&uacute;mro no es par, ingrese otro en el recuadro &#129488;!</h5>";
                                                    echo "</div>";
                                                }
                                            } else {
                                                $intValorPar = $_POST['hdnNumeroPar'];
                                                echo "<div class='input-group-prepend'>";
                                                echo "<span class='input-group-text'>WC</span>";
                                                echo "<span class='input-group-text'>Introdusca un N&uacute;mero correcto :</span>";
                                                echo "</div>";
                                                echo "<input autofocus type='text' name='txtRegistro' placeholder='0 ~ 9' class='form-control text-center' id='wc-center' aria-describedby='inputGroup-sizing-lg'>";
                                                echo "<input type='hidden' name='hdnConteo' value='$intContador'>";
                                                echo "<input type='hidden' name='hdnNumeroPar' value='$intValorPar'>";
                                                echo "<button class='btn btn-outline-danger col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>";
                                                echo "<div class='form-group text-center col-md-12 mb-0 p-0'>";
                                                echo "<br><h5>&#9757;&#127995; No agregó ningún valor en el campo arriba &#129488;!</h5>";
                                                echo "</div>";
                                            }
                                            echo "</div>";
                                        } else {
                                            $intValorPar = null; ?>
                                            <div class="input-group mt-1 mb-1">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">WC</span>
                                                    <span class="input-group-text">Introdusca un N&uacute;mero &#128073;&#127995; :</span>
                                                </div>
                                                <input autofocus type="text" name="txtRegistro" placeholder='n&uacute;mero par' class="form-control text-center" id="wc-center" aria-describedby="inputGroup-sizing-lg">
                                                <input type="hidden" name="hdnConteo" value="1">
                                                <input type="hidden" name="hdnNumeroPar" value="">
                                                <button class='btn btn-outline-success col-md-4 col-md-offset-4' type='submit' name="btnEnviar">Enviar</button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </form>
                                <div class="jumbotron2 border border-white p-3 m-2">
                                    <?php $objMatriz->imprimirTabla($intValorPar); ?>
                                </div>
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