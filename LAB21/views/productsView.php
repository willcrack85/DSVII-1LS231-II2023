<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #80">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 21 - MVC PHP Example</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="assets/ico/favicon.ico" />
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- ESTILO PARA ALERTAS CON SWEET ALERT 2 -->
    <link rel="stylesheet" type="text/css" href="assets/css/sweetalert2.min.css">
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="assets/css/wcStyle2022.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">

    <style>
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
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mx-bg-top-linear">
            <a class="navbar-brand text-uppercase" rel="nofollow" target="_blank" href="#">
                <img src="assets/ico/favicon.ico" width="32" height="32" class="d-inline-block align-top" alt="Logo">
                Dev Soft 7 - 2023
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">|&nbsp;INICIO&nbsp;|<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Hacer una busqueda" aria-label="Search"
                        id="wc-center">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-5">DS7 - Laboratorio 21</h1>
                    <p class="lead">Objetivo: Patrón de diseño Modelo-Vista-Controlador (MVC) desde PHP sin frameworks.
                    </p>
                    <hr class="my-1">
                </div>
            </div>
            <div class="container-sm">
                <div class="row">
                    <div class='jumbotron-wc1 border border-white col-md-12'>
                        <div class="shadow-lg p-3 mb-2 m-2 bg-white text-primary rounded">
                            <h1 class='text-white bg-dark text-center'>Lista de Productos</h1>
                        </div>
                        <div class="jumbotron-wc2 border border-white p-3 m-2">
                            <div class="shadow-lg p-3 mb-2 mx-5 bg-white text-primary rounded">
                                <?php foreach ( $products as $product )
                                { ?>
                                    <ul class="product-info">
                                        <li><span>Codigo:</span> <?= $product->getProductCode (); ?></li>
                                        <li><span>Nombre:</span> <?= $product->getProductName (); ?></li>
                                        <li><span>Descripcion breve:</span> <?= $product->getProductShortName (); ?></li>
                                        <li><span>Precio:</span> USD$ <?= $product->getProductPvp (); ?> </li>
                                    </ul>
                                <?php } ?>
                            </div>
                        </div>
                        <hr class="my-2">
                        <blockquote class="blockquote text-center">
                            <footer class="display-4 blockquote-footer text-white">DS VII</footer>
                        </blockquote>
                    </div>
                </div> <!-- /container -->
            </div> <!-- /container -->
        </div>
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