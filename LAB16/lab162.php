<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #74">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 16.2</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="assets/ico/favicon.ico" />
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- ESTILO PARA ALERTAS CON SWEET ALERT 2 -->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css">
    <!-- ESTILO PARA TABLAS DE JQUERY CON DATATABLE -->

    <style>
        .dataTables_info {
            color: red !important;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="jumbotron pb-1">
                <div class="container">
                    <h1 class="display-5">DS7 - Laboratorio 16.2</h1>
                    <p class="lead">Consumir servicio web Restful desde PHP.</p>
                    <hr class="my-1">
                </div>
            </div>
            <div class="container-sm pb-4">
                <div class="row">
                    <div class='jumbotron-wc1 border border-white col-md-12'>
                        <div class="shadow-lg px-2 py-2 mx-2 text-primary rounded">
                            <h1 class="text-center text-white bg-dark">Consumir servicio web Restful desde PHP</h1>
                        </div>
                        <div class="jumbotron-wc2 border border-white p-3 m-2">
                            <?php
                            $data = json_decode ( file_get_contents ( 'https://api.mercadolibre.com/users/226384143' ), true );
                            echo ( "<div class='px-5 py-2 my-2 mx-5 shadow-lg bg-light rounded'>" );
                            echo ( "<hr class='my-4'>" );
                            echo ( "<dl class='row'>" );
                            foreach ( $data as $nombre => $valor )
                                {
                                if ( ! is_array ( $valor ) )
                                    {
                                    print( "<dt class='col-sm-4 text-right'>campo $nombre :</dt>" );
                                    print( "<dd class='col-sm-8'>valor $valor</dd>" );
                                    }
                                else
                                    {
                                    print( "<dt class='col-sm-4 text-right'>campo $nombre :</dt>" );
                                    $strl = null;
                                    foreach ( $valor as $valor_array )
                                        {
                                        if ( ! is_array ( $valor_array ) )
                                            $strl .= "valor: $valor_array, ";
                                        else
                                            $strl .= "<arreglo>";
                                        }
                                    print( "<dd class='col-sm-8'>[&nbsp;$strl]</dd>" );
                                    }
                                }
                            echo ( "</dl>" );
                            echo ( "<hr class='my-4'>" );
                            echo ( "</div>" );
                            ?>
                        </div>
                        <hr class="my-2">
                        <blockquote class="blockquote text-center">
                            <footer class="display-4 blockquote-footer text-white">DS VII</footer>
                        </blockquote>
                    </div>
                </div>
            </div> <!-- /container-sm -->
        </div> <!-- /container -->
    </main>
    <footer class="wcfooter mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">
                <b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/"
                        title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>
                    Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </span>
        </div>
    </footer>
</body>
<!-- CARGAR ENLACES A JAVASCRIPT -->
<script src="assets/js/sweetalert2.all.min.js"></script>
<script>
    const wcMixin = Swal.mixin({
        toast: true,
        icon: 'success',
        title: 'General Title',
        animation: false,
        position: 'top-right',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    window.addEventListener('load', (event) => {
        wcMixin.fire({
            animation: true,
            title: 'Conexi&oacute;n Iniciada...',
        });
    });
</script>

</html>