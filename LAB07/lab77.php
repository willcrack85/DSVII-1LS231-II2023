<?php
if (array_key_exists('btnEnviar', $_POST)) {
    include("class/class_lib.php");
    $diam = $_POST['diametro'];
    $altu = $_POST['altura'];
    $cil = new Cilindro($diam, $altu);
    $volumen = $cil->calc_volumen();
    $area = $cil->calc_area();

    echo "<!DOCTYPE html>";
    echo "<html lang='es' class='h-100'>";
    echo "<head>";
    echo "<meta charset='utf-8'>";
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    echo "<meta name='description' content='Template con PHP en Laboratorio #41'>";
    echo "<meta name='keywords' content='HTML5, CSS, Javascript'/>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
    echo "<meta name='author' content='WillCrack Solution Corp.'>";
    echo "<meta name='generator' content='WC 0.0.0'>";
    echo "<title>Laboratorio 7.7</title>";
    echo "<!-- Icono de la página WEB -->";
    echo "<link rel='shortcut icon' type='image/x-ico' href='assets/ico/favicon.ico' />";
    echo "<!-- ESTILO Bootstrap core CSS -->";
    echo "<link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>";
    echo "<!-- ESTILO Custom PARA LA PAGINA WEB -->";
    echo "<link rel='stylesheet' type='text/css' href='assets/css/style.css'>";
    echo "<!-- ESTILO PARA ALERTAS CON SWEET ALERT 2 -->";
    echo "<link rel='stylesheet' type='text/css' href='assets/css/sweetalert2.min.css'>";
    echo "<style>.bd-placeholder-img {font-size: 1.125rem;text-anchor: middle;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}";
    echo "@media (min-width: 768px) {.bd-placeholder-img-lg {font-size: 3.5rem;}}</style>";
    echo "<!-- CARGAR ENLACES A JAVASCRIPT -->";
    echo "<script src='assets/js/sweetalert2.all.min.js'></script>";
    echo "<script src='assets/js/jquery-3.5.1.min.js'></script>";
    echo "<script src='assets/js/bootstrap.bundle.min.js'></script>";
    echo "<script src='assets/js/app.js'></script>";
    echo "</head>";
    echo "<body class='d-flex flex-column h-100'>";
    echo "<header><nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark mx-bg-top-linear'>";
    echo "<a class='navbar-brand text-uppercase' rel='nofollow' target='_blank' href='#'><img src='assets/ico/favicon.ico' width='32' height='32' class='d-inline-block align-top' alt='Logo'>Dev Soft 7 - 2023</a>";
    echo "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>";
    echo "<div class='collapse navbar-collapse' id='navbarsExampleDefault'><ul class='navbar-nav mr-auto'><li class='nav-item active'><a class='nav-link' href='#'>Inicio <span class='sr-only'(current)</span></a></li></ul>";
    echo "<form class='form-inline my-2 my-lg-0'>";
    echo "<input class='form-control mr-sm-2' type='text' placeholder='Hacer una busqueda' aria-label='Search' id='wc-center'>";
    echo "<button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Buscar</button>";
    echo "</form></div></nav></header>";
    echo "<main role='main' class='flex-shrink-0'>";
    echo "<div class='jumbotron'><div class='container'>";
    echo "<h1 class='mt-5'>DS7 - Laboratorio 7.7</h1>";
    echo "<p class='lead'>Uso de formulario en orientaci&oacute;n a objeto II.</p><hr class='my-4'></div></div>";
    echo "<div class='container'>";
    echo "<div class='row p-1'>";
    echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12'>";
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='jumbotron1 border border-white col-md-12'>";
    echo "<h2 class='display-6'>CALCULO DEL VOLUMEN Y AREA DE UN CILINDRO</h2>";
    echo "<table class='table'><tbody>";
    echo "<tr>";
    echo "<th>";
    echo "<div class='jumbotron2 bg-info border border-white p-2 m-1'>";
    echo "<h3>RESULTADOS DEL VOL&Uacute;MEN Y &Aacute;REAS REGISTRADAS</h3>";
    echo "<hr class='my-4'>";
    echo "<div class='form-group row'>";
    echo "<label for='cResultado1' class='col-sm-8 col-form-label text-left'>Volumen de un Cilindro en mts. cubico.</label>";
    echo "<div class='col-sm-4'>";
    echo "<input type='text' class='form-control text-center font-weight-bolder' id='cResultado1' placeholder='";
    printf("%.2f' readonly>", $volumen);
    echo "</div></div>";
    echo "<div class='form-group row'>";
    echo "<label for='cResultado2' class='col-sm-8 col-form-label text-left'>&Aacute;rea de un Cilindro en mts. cuadrados.</label>";
    echo "<div class='col-sm-4'>";
    echo "<input type='text' class='form-control text-center font-weight-bolder' id='cResultado2' placeholder='";
    printf("%.2f' readonly>", $area);
    echo "</div></div><hr class='my-4'></div></th></tr></tbody>";
    echo "</table><hr class='my-4'>";
    echo "<blockquote class='blockquote text-center'><footer class='display-4 blockquote-footer text-white'>DS VII</footer></blockquote>";
    echo "</div></div></div></div></div></div></main>";
    echo "<footer class='wcfooter mt-auto py-3'>";
    echo "<div class='container text-center'><span class='text-muted'>";
    echo "<b>Dise&ntilde;ado por <a href='https://willcrackcorp.w3spaces.com/' title='WillCrack Solutions Corp., Panam&aacute;' target='_blank'>WC Solutions Corp.</a> Copyright &copy; DS 7 - 2023 | William Miranda</b>";
    echo "</span></div></footer></div>";
    echo "</body></html>";
} else { ?>
    <!DOCTYPE html>
    <html lang="es" class="h-100">

    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Template con PHP en Laboratorio #41">
        <meta name="keywords" content="HTML5, CSS, Javascript" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="WillCrack Solution Corp.">
        <meta name="generator" content="WC 0.0.0">
        <title>Laboratorio 7.7</title>
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
                    <h1 class="mt-2">DS7 - Laboratorio 7.7</h1>
                    <p class="lead">Uso de formulario en orientaci&oacute;n a objeto II.</p>
                    <hr class="my-1">
                </div>
            </div>
            <div class="container">
                <div class="row p-1">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="container">
                            <div class="row">
                                <div class='jumbotron1 border border-white col-md-12'>
                                    <h2 class="display-6">CALCULO DEL VOLUMEN Y AREA DE UN CILINDRO</h2>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <div class="jumbotron2 bg-info border border-white p-2 m-1">
                                                        <form name='formularioDatos' method='POST' action='lab77.php' class='row'>
                                                            <div class='form-group px-3 col-md-6'>
                                                                <label for='txtdato1'>Registrar Diametro (MTS)</label>
                                                                <input type='text' name='diametro' id='wc-center' placeholder="Ingrese un n&uacute;mero" class='form-control' required><br>
                                                            </div>
                                                            <div class='form-group px-3 col-md-6'>
                                                                <label for='txtdato2'>Registrar altura (MTS)</label>
                                                                <input type='text' name='altura' id='wc-center' placeholder='Ingrese un n&uacute;mero' class='form-control' required><br>
                                                            </div>
                                                            <div class='form-group px-5 col-md-12'>
                                                                <button class='btn btn-lg btn-secondary col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Calcular</button>
                                                            </div>
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
<?php } ?>