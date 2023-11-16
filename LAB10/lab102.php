<?php
require_once('class/votos.php');

$obj_votos = new votos();
$result_votos = $obj_votos->listar_votos();
foreach ($result_votos as $value) {
    $votos1 = $value['votos1'];
    $votos2 = $value['votos2'];
}
$totalVotos = $votos1 + $votos2;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #48">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 10.2</title>
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
</head>

<body class="d-flex flex-column h-100">
    <header>
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
        <div class="jumbotron mx-3">
            <div class="container">
                <h1 class="display-5">DS7 - Laboratorio 10.2</h1>
                <p class="lead">Objetivo: Desarrollar aplicaciones web en PHP con acceso a base de datos MySQL (MariaDB).</p>
                <hr class="my-1">
            </div>
        </div>
        <div class="container-sm">
            <div class="row m-1">
                <div class="jumbotron1 border border-white col-md-12 p-3">
                    <div class="text-center shadow-lg p-3 mb-3 bg-light rounded">
                        <?php
                        print("<div class='table-responsive-sm'>");
                        print("<table class='table table-striped table-dark'>");
                        print("<thead>");
                        print("<tr>");
                        print("<th scope='col' class='p-2 text-center'>WC</th>");
                        print("<th scope='col' class='p-2 text-center'>Respuestas</th>");
                        print("<th scope='col' class='p-2 text-center'>Votos</th>");
                        print("<th scope='col' class='p-2 text-center'>Porcentaje</th>");
                        print("<th scope='col' class='p-2 text-center'>Representacion Grafica</th>");
                        print("</tr>");
                        print("</thead>");
                        print("<tbody>");
                        $porcentaje1 = round(($votos1 / $totalVotos) * 100, 2);
                        print("<tr>");
                        print("<th scope='row'>1</th>");
                        print("<td class='text-center'>Si</td>");
                        print("<td class='text-center'>$votos1</td>");
                        print("<td class='text-center'>$porcentaje1%</td>");
                        print("<td class='text-left aling-middle' width='600'><img src='assets/img/p-yellow.gif' height='25' width='" . ($porcentaje1 * 6) . "'></th>");
                        print("</tr>");
                        $porcentaje2 = round(($votos2 / $totalVotos) * 100, 2);
                        print("<tr>");
                        print("<th scope='row'>2</th>");
                        print("<td class='text-center'>No</td>");
                        print("<td class='text-center'>$votos2</td>");
                        print("<td class='text-center'>$porcentaje2%</td>");
                        print("<td class='text-left' width='600'><img src='assets/img/p-blue.gif' height='25' width='" . ($porcentaje2 * 6) . "'></th>");
                        print("</tr>");
                        print("</tbody>");
                        print("</table>");
                        print("</div>");
                        print("<div class='form-group text-center p-3 mb-3'>");
                        print("<h5>Numero total de votos emitidos: [ <font class='text-primary'>$totalVotos</font> ] </h5>");
                        print("<div class='progress' style='height: 25px;'>");
                        print("<div class='progress-bar bg-warning text-dark' role='progressbar' style='width: $porcentaje1%' aria-valuenow='$votos1' aria-valuemin='0' aria-valuemax='$totalVotos'>$porcentaje1%</div>");
                        print("<div class='progress-bar bg-danger' role='progressbar' style='width: $porcentaje2%' aria-valuenow='$votos2' aria-valuemin='0' aria-valuemax='$totalVotos'>$porcentaje2%</div>");
                        print("</div>");
                        print("</div>");
                        print("<div class='form-group col-md-12'>");
                        print("<a class='btn btn-success col-md-4 col-md-offset-4' href='lab101.php' role='button'>P&aacute;gina de Votaci&oacute;n</a>");
                        print("</div>");
                        ?>
                    </div>
                    <hr class="my-2">
                    <blockquote class="blockquote text-center">
                        <footer class="display-4 blockquote-footer text-white">Edicion Limitada</footer>
                    </blockquote>
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
<!-- CARGAR ENLACES A JAVASCRIPT -->
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/app.js"></script>

</html>