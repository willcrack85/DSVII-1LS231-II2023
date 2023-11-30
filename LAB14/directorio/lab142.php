<?php session_start (); ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #60">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 14.2</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="../assets/ico/favicon.ico" />
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap4/css/bootstrap.min.css">
    <!-- ESTILO para alertas con sweetalert2 -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/sweetAlert2/sweetalert2.min.css">
    <!-- ESTILO para las animaciones -->
    <link rel="stylesheet" type="text/css" href="../assets/plugins/animate/animate.min.css">
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

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
                <img src="../assets/ico/favicon.ico" width="32" height="32" class="d-inline-block align-top" alt="Logo">
                Dev Soft 7 - 2023
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-5">DS7 - Laboratorio 14.2</h1>
                    <p class="lead">C&oacute;digo PHP para acceder a los datos de la base de datos labsdb.</p>
                    <hr class="my-1">
                </div>
            </div>
            <?php if ( isset( $_SESSION[ 'usuario_valido' ] ) )
            { ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class='jumbotron1 border border-white col-md-12'>
                            <div class="shadow-lg p-3 mb-3 bg-white rounded">
                                <h2 class="mt-1">CONSULTA DE NOTICIAS</h2>
                            </div>
                            <div class="jumbotron2 border border-white p-3 mb-2">
                                <?php
                                require_once( '../class/noticias.php' );

                                $obj_noticia = new noticia ();
                                $noticias    = $obj_noticia->getListarNoticias ();

                                if ( $obj_noticia->getSweetAlert () != "" )
                                    {
                                    $errorMessage = $obj_noticia->getSweetAlert ();
                                    echo ( "<input type='hidden' id='msj' value='$errorMessage'>" );
                                    $obj_noticia->setSweetAlert ( "" );
                                    }

                                if ( $noticias !== null && is_array ( $noticias ) )
                                    {
                                    $nfilas = count ( $noticias );
                                    $Cont   = 1;
                                    echo "<div class='table-responsive-lg'>";
                                    print( "<table class='table table-striped table-dark'>" );
                                    echo "<thead>";
                                    echo "<tr>";
                                    echo "<th scope='col' class='bg-gradient-primary'>WC</th>";
                                    echo "<th scope='col' class='bg-danger text-white'>TITULO</th>";
                                    echo "<th scope='col' class='bg-danger text-white'>TEXTO</th>";
                                    echo "<th scope='col' class='bg-danger text-white'>CATEGORIA</th>";
                                    echo "<th scope='col' class='bg-danger text-white'>FECHA</th>";
                                    echo "<th scope='col' class='bg-danger text-white'>IMAGEN</th>";
                                    echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    foreach ( $noticias as $resultado )
                                        {
                                        print( "<tr>" );
                                        print "<th scope='row' class='bg-info text-white'>$Cont</th>";
                                        print( "<td>" . $resultado[ 'titulo' ] . "</td>" );
                                        print( "<td>" . $resultado[ 'texto' ] . "</td>" );
                                        print( "<td>" . $resultado[ 'categoria' ] . "</td>" );
                                        print( "<td>" . date ( "j/n/Y", strtotime ( $resultado[ 'fecha' ] ) ) . "</td>" );
                                        if ( $resultado[ 'imagen' ] != "" )
                                            {
                                            print( "<td class='text-center'><a onclick='javascript:imgSplash(\"../assets/img/" . $resultado[ 'imagen' ] . "\");'><img src='../assets/img/info.gif' alt='WC' width='25' height='25'></a></td>" );
                                            }
                                        else
                                            {
                                            print( "<td>&nbsp;</td>" );
                                            }
                                        $Cont++;
                                        print( "</tr>" );
                                        }
                                    echo "</tbody>";
                                    print "</table>";
                                    print "</div>";
                                    }
                                else
                                    {
                                    echo "<div class='alert alert-danger text-center mb-0' role='alert'>No hay noticias disponibles por ahora !</div>";
                                    }
                                ?>
                            </div>
                            <p class="lead text-center my-3">
                                <a href="../acceso/login.php" class="btn btn-lg btn-secondary" role="button">Men&uacute;
                                    Principal</a>
                            </p>
                            <hr class="my-1">
                            <blockquote class="blockquote text-center">
                                <footer class="display-4 blockquote-footer text-white">DS VII</footer>
                            </blockquote>
                        </div>
                    </div>
                </div> <!-- /container -->
            <?php }
        else
            { ?>
                <div class="row mb-3 text-center">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 align-items-center">
                        <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                            <div class="form-signin text-center">
                                <div class="text-center mb-4">
                                    <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                                    <h1 class="h3 mb-3 font-weight-normal">Acceso no Autorizado</h1>
                                    <p class="mt-5 mb-1">
                                        <a href="../acceso/login.php" class="btn btn-lg btn-danger btn-block"
                                            role="button">Conectar</a>
                                    </p>
                                </div>
                                <p class="mt-5 mb-1 text-center">Copyright &copy; DS 7 2023</p>
                                <p class="mt-1 mb-1 text-center">Dise&ntilde;ado por <a
                                        href="https://willcrackcorp.w3spaces.com/"
                                        title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC
                                        Solutions
                                        Corp.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 themed-grid-col"></div>
                </div>
            <?php } ?>
        </div>
    </main>
    <footer class="wcfooter mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">
                <b>Dise&ntilde;ado por
                    <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;"
                        target="_blank">
                        WC Solutions Corp.
                    </a>
                    Copyright &copy; DS 7 - 2023 | William Miranda
                </b>
            </span>
        </div>
    </footer>
    <!-- SCRIPTS BOOTSTRAP 4 -->
    <script src="../assets/jquery/jquery-3.5.1.min.js"></script>
    <script src="../assets/popper/popper.min.js"></script>
    <script src="../assets/bootstrap4/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/sweetAlert2/sweetalert2.all.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>