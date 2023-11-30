<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Template con PHP en Laboratorio #00" />
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
    <meta name="generator" content="Hugo 0.101.0" />
    <title>Laboratorio 18.1</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="assets/ico/favicon.ico" />
    <!-- ESTILO Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap4/css/bootstrap.min.css" />
    <!-- ESTILO Custom PARA LA PAGINA WEB -->
    <link rel="stylesheet" type="text/css" href="assets/css/cover.css" />

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
    <!-- <script src="assets/jquery/js/jquery-3.5.1.min.js"></script> -->
</head>

<body class="text-center">
    <!-- Objetivo: Introducción a expresiones regulares en php (back-end) y HTML5 (front-end). -->
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Dev Software VII - 2023</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Inicio</a>
                    <a class="nav-link" href="#">Nosotros</a>
                    <a class="nav-link" href="#">Conctactos</a>
                </nav>
            </div>
        </header>
        <main role="main" class="inner cover px-0">
            <h1 class="cover-heading">DS7 - Laboratorio 18.1</h1>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='jumbotron text-center col-md-12'>
                        <h1>Formulario de Inscripcion</h1>
                        <form action="./lab181.php" method='post' class='row'>
                            <div class='form-group col-md-6'>
                                <label for='nombre'>Nombre:</label>
                                <input type='text' name='nombre' value='' id='nombre' class='form-control' required><br>
                            </div>
                            <div class='form-group col-md-6'>
                                <label for='apellido'>Apellido:</label>
                                <input type='text' name='apellido' value='' id='apellido' class='form-control'
                                    required><br>
                            </div>
                            <div class='form-group col-md-6'>
                                <label for='cedula'>Email:</label>
                                <input type='text' name='cedula' value='' id='cedula' placeholder='x-xxx-xxxx'
                                    class='form-control' required><br>
                            </div>
                            <div class='form-group col-md-6'>
                                <label for='numero'>Contrase&nacute;a:</label>
                                <input type='text' name='numero' value='' id='numero' placeholder='xxxx-xxxx'
                                    class='form-control' required><br>
                            </div>
                            <div class='form-group col-md-6'>
                                <label for='numero'>Repetir Contrase&nacute;a:</label>
                                <input type='text' name='numero' value='' id='numero' placeholder='xxxx-xxxx'
                                    class='form-control' required><br>
                            </div>
                            <div class='form-group col-md-6'>
                                <label for='numero'>IP actual del equipo:</label>
                                <input type='text' name='numero' value='' id='numero' placeholder='xxxx-xxxx'
                                    class='form-control' required><br>
                            </div>
                            <div class='form-group col-md-12'>
                                <div class="row row-cols-1 row-cols-md-6 g-2 mt-4 justify-content-center">
                                    <div class="col themed-grid-col mt-2 align-items-center">
                                        <button type="submit" class="btn btn-success btn-lg btn-block"
                                            name="btnEnviar">Registrar
                                            cuenta</button>
                                    </div>
                                    <div class="col themed-grid-col mt-2 align-items-center">
                                        <a href="login.php" class="btn btn-warning btn-lg btn-block" role="button"
                                            aria-pressed="true">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="mastfoot mt-auto py-3">
            <div class="container text-center">
                <span class="text-muted">
                    <b>Dise&ntilde;ado por
                        <a rel="noopener" href="https://willcrackcorp.w3spaces.com/"
                            title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>
                        Copyright &copy; DS 7 - 2023 | William Miranda</b>
                </span>
            </div>
        </footer>
    </div>
</body>

</html>