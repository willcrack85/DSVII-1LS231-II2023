<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #27">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 5.1</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="assets/ico/favicon.ico" />
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="assets/css/wcStyle2022.css">
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
                Dev Software VII - 2023
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Hacer una busqueda" aria-label="Search" id="wc-center">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4">DS7 - Laboratorio 5.1</h1>
                <p class="lead">Objetivo: Desarrollar aplicaciones web en PHP con procesameinto de formularios que
                    permitan adjuntar archivos al servidor web..</p>
                <hr class="my-4">
            </div>
        </div>
        <div class="container-md">
            <div class="row p-1">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class='jumbotron-wc1 border border-white col-md-12'>
                        <div class="jumbotron-wc2 bg-info border border-white">
                            <h2 class="text-center p-1">SUBIDA DE ARCHIVOS AL SERVIDOR WEB</h2>
                            <?php
                            if (is_uploaded_file($_FILES['fNombArchCli']['tmp_name'])) {
                                $nombreDirectorio = "miFile/";
                                $nombrearchivo = $_FILES['fNombArchCli']['name'];
                                $nombreCompleto = $nombreDirectorio . $nombrearchivo;
                                if (is_file($nombreCompleto)) {
                                    $idUnico = time();
                                    $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                                    echo "<div class='form-group text-center col-md-12'>";
                                    echo "<br>Archivo repetido, se cambiar&aacute; el nombre a $nombrearchivo";
                                    echo "</div>";
                                }
                                move_uploaded_file($_FILES['fNombArchCli']['tmp_name'], $nombreDirectorio . $nombrearchivo);
                                echo "<div class='form-group mb-3 text-center col-md-12'>";
                                echo "<br>El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio<br>";
                                echo "</div>";
                            } else {
                                echo "<div class='form-group text-center col-md-12'>";
                                echo "<br>No se ha podido subir el archivo...";
                                echo "</div>";
                            } ?>
                        </div>
                        <hr class="my-4">
                        <blockquote class="blockquote text-center">
                            <footer class="display-4 blockquote-footer text-white">Edicion Limitada</footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->
    </main>
    <footer class="wcfooter mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">
                <b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>
                    Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </span>
        </div>
    </footer>
</body>
<!-- CARGAR ENLACES A JAVASCRIPT -->
<script src="assets/js/sweetalert2.all.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- CONFIGURAR IMPUT FILE -->
<script src="assets/js/bs-custom-file-input.min.js"></script>
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
    //=====================================================================//
    window.jQuery || document.write('<script src="assets/js/jquery-3.5.1.min.js"><\/script>')
    //=====================================================================//
    bsCustomFileInput.init()
    var btn = document.getElementById('btnResetForm')
    var form = document.querySelector('form')
    btn.addEventListener('click', function() {
        form.reset()
    })
</script>

</html>