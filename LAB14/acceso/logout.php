<?php session_start (); ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #59">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 14 - Logout</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="../assets/ico/favicon.ico">
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap4/css/bootstrap.min.css">
    <!-- ESTILO para alertas con sweetalert2 -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/sweetAlert2/sweetalert2.min.css">
    <!-- ESTILO para las animaciones -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/animate/animate.min.css">
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style_access.css">

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
    <div class="container">
        <div class="row mb-3 text-center">
            <div class="col-md-3 themed-grid-col"></div>
            <div class="col-md-6 themed-grid-col">
                <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                    <div class="form-signin text-center">
                        <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                        <?php
                        //// Sesión iniciada
                        if ( isset( $_SESSION[ "usuario_valido" ] ) )
                            {
                            session_destroy ();
                            ?>
                            <h1 class="h3 mb-3 font-weight-normal">Conexion Finalizada</h1>
                            <p class="mt-5 mb-1"><a class="btn btn-lg btn-success btn-block" href="login.php"
                                    role="button">Volver a Conectar</a></p>
                            <?php
                            }
                        else
                            {
                            ?>
                            <h1 class="h3 mb-3 font-weight-normal">No Existe Una Conexion Activa</h1>
                            <p class="mt-5 mb-1"><a class="btn btn-lg btn-danger btn-block" href="login.php"
                                    role="button">Conectar Nuevamente</a></p>
                            <?php
                            }
                        ?>
                        <p class="mt-5 mb-1">Copyright &copy; DS 7 2022 | William Miranda</p>
                        <p class="mt-1 mb-1">Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/"
                                title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 themed-grid-col"></div>
        </div>
    </div>
</body>

</html>