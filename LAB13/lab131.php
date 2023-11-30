<?php
if (isset($_COOKIE['contador'])) {
    //* Caduca en un año la cookie
    setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
    $mensaje = "Gracias por visitarnos. Número de visitas: " . $_COOKIE['contador'];
} else {
    // Caduca en un año
    setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
    $mensaje = "Bienvenido a nuestro sitio web";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #54">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 13.1</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="assets/ico/favicon.ico">
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap4/css/bootstrap.min.css">
    <!-- ESTILO para alertas con sweetalert2 -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/sweetAlert2/sweetalert2.min.css">
    <!-- ESTILO para las animaciones -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/animate/animate.min.css">
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

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
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-5">DS7 - Laboratorio 13.1</h1>
                <p class="lead">Objetivo: Desarrollar aplicaciones web en PHP con manejo de cookies.</p>
                <p class="lead">Nota: Copiar la carpeta css utilizada en los labs 9, 10, 11 y 12 en la carpeta correspondiente al lab13.</p>
                <hr class="my-1">
            </div>
            <div class="row rounded">
                <div class="col-md-8 offset-md-2 text-center my-2">
                    <div class='jumbotron1 border border-white col-md-12'>
                        <div class="shadow-lg m-2 p-3 bg-white text-primary rounded">
                            <h1 class="text-center text-white bg-dark rounded">CONTADOR DE VISITAS DE COOKIES</h1>
                        </div>
                        <div class="jumbotron2 border border-white p-3 m-2">
                            <div class="shadow-lg p-3 mb-2 m-2 bg-white text-primary rounded">
                                <h5>
                                    Uso de $_COOKIE
                                    <small class="text-muted h6"><?php echo $mensaje; ?></small>
                                </h5>
                                <?php
                                if (isset($_COOKIE['contador'])) {
                                ?>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12 mt-4 align-items-center">
                                            <a href="lab132.php" class="btn btn-warning btn-lg col-lg-6 col-lg-offset-3 active" role="button" aria-pressed="true">Ir a coockie "User"&nbsp;&gt;&gt;</a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <hr class="my-1">
                        <blockquote class="blockquote text-center">
                            <footer class="display-4 blockquote-footer text-white">DS VII</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
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