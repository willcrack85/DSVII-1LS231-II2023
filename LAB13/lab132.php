<?php
if (array_key_exists('btnEnviar', $_POST)) {
    $expire = time() + 60 * 5;
    setcookie("user", $_REQUEST['visitante'], $expire);
    header("Refresh: 0");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #55">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 13.2</title>
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
                <h1 class="display-5">DS7 - Laboratorio 13.2</h1>
                <p class="lead">Objetivo: Desarrollar aplicaciones web en PHP con manejo de cookies.</p>
                <p class="lead">Nota: Copiar la carpeta css utilizada en los labs 9, 10, 11 y 12 en la carpeta correspondiente al lab13.</p>
                <hr class="my-1">
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center my-2">
                    <div class='jumbotron1 border border-white col-md-12'>
                        <div class="shadow-lg m-2 px-3 py-2 bg-white text-primary rounded">
                            <h1 class="text-center text-white bg-dark rounded">CREACI&Oacute;N DE COOKIES</h1>
                        </div>
                        <div class="jumbotron2 border border-white p-3 m-2">
                            <div class="shadow-lg p-3 m-2 bg-white text-primary rounded">
                                <h2 class="text-center">La coockie "User" tendr&aacute; solo 5 minutos de duraci&oacute;n</h2>
                                <?php
                                if (isset($_COOKIE["user"])) {
                                    print("<p class='lead'>Hola <kbd>" . $_COOKIE['user'] . "</kbd> gracias por visitar nuestro sitio WEB.</p>");
                                ?>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 mt-4 align-items-center">
                                            <a href="lab133.php" class="btn btn-success btn-lg col-md-6 col-md-offset-3 active" role="button" aria-pressed="true">Continuar &gt;&gt;</a>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                ?>
                                    <form name='formCookie' method='post' action='lab132.php'>
                                        <p class="lead">
                                            Hola, primera vez que te vemos por nuestro sitio web ¿Como te llamas?
                                        </p>
                                        <div class="row mt-2 mx-0 px-0 justify-content-center">
                                            <div class="col-lg-8 col-lg-offset-2 px-0 align-items-center">
                                                <div class="input-group">
                                                    <label class="sr-only" for="valor">Username</label>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input autofocus type="text" class="form-control text-center" placeholder="Username" aria-describedby="txtvisitante" name="visitante" id="wc-center">
                                                    <div class="input-group-append" id="txtvisitante">
                                                        <button class="btn btn-outline-primary" type="submit" name="btnEnviar">Identificarse</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class='col-md-12 mt-4 align-items-center'>
                                                <a href="lab133.php" class="btn btn-secondary btn-lg col-md-6 col-md-offset-3 disabled" tabindex="-1" role="button" aria-disabled="true">Continuar &gt;&gt;</a>
                                            </div>
                                        </div>
                                    </form>
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
    <!-- SCRIPTS BOOTSTRAP 4 -->
</body>

</html>