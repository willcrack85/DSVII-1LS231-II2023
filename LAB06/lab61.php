    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Template con PHP en Laboratorio #29">
        <meta name="keywords" content="HTML5, CSS, Javascript" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="WillCrack Solution Corp.">
        <meta name="generator" content="WC 0.0.0">
        <title>Laboratorio 6.1</title>
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
                    <h1 class="mt-2">DS7 - Laboratorio 6.1</h1>
                    <p class="lead">Clase + Instancia de objeto en 1 solo Archivo.</p>
                    <hr class="my-1">
                </div>
            </div>
            <div class="container">
                <div class="row p-1">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="container">
                            <div class="row">
                                <div class='jumbotron1 border border-white col-md-12'>
                                    <h2 class="display-6">RESULTADO CONSEGUIDO</h2>
                                    <div class="jumbotron2 bg-info border border-white">
                                        <?php
                                        /**
                                         ** Descripcion del lab61.php
                                         * @author WCcorp
                                         ** Laboratorio 6.1: Clase + Instancia de objeto en 1 solo archivo.
                                         **/
                                        class cliente
                                        {
                                            var $nombre;
                                            var $numero;
                                            var $peliculas_alquiladas;

                                            function __contruct($nombre, $numero)
                                            {
                                                $this->nombre = $nombre;
                                                $this->numero = $numero;
                                                $this->peliculas_alquiladas = array();
                                            }

                                            function __destruct()
                                            {
                                                echo "<p style='color: white;'>Destruido: </p>", $this->nombre;
                                            }

                                            function dame_numero()
                                            {
                                                return $this->numero;
                                            }
                                        }

                                        // //Instanciamos un par de objetos de Cliente.
                                        $Cliente1 = new cliente("Pepe", 1);
                                        $Cliente2 = new cliente("Roberto", 564);

                                        // //Mostar el numero de cada cliente creado.
                                        echo "<dl class='row mt-3'>";
                                        echo "<dt class='col-sm-5 ml-3'>El identificado del Cliente 1 es: </dt>";
                                        echo "<dd class='col-sm-7'>" . $Cliente1->dame_numero() . "</dd>";
                                        echo "</dl>";
                                        echo "<dl class='row'>";
                                        echo "<dt class='col-sm-5 ml-3'>El identificado del Cliente 2 es: </dt>";
                                        echo "<dd class='col-sm-7'>" . $Cliente2->dame_numero() . "</dd>";
                                        echo "</dl>";
                                        ?>
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
                    <b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>
                        Copyright &copy; DS 7 - 2023 | William Miranda</b>
                </span>
            </div>
        </footer>
    </body>

    </html>