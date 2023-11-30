<?php session_start (); ?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #63">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 14 - Nuevo Usuario</title>
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
            <?php
            //// Sesión iniciada
            if ( isset( $_SESSION[ "usuario_valido" ] ) )
                {
                if ( array_key_exists ( 'btnEnviar', $_POST ) )
                    {
                    $usuario     = $_REQUEST[ 'txtUsuario' ];
                    $clave       = $_REQUEST[ 'txtClave' ];
                    $salt        = substr ( $usuario, 0, 2 );
                    $clave_crypt = crypt ( $clave, $salt );
                    require_once( "../class/user.php" );
                    $obj_usuarios = new usuarios ();
                    $resultado    = $obj_usuarios->grabar_usuario ( $usuario, $clave_crypt );
                    if ( $resultado )
                        { ?>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                                <div class="form-signin text-center">
                                    <div class="text-center mb-4">
                                        <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                                        <h1 class="h3 mb-3 font-weight-normal">Nuevo usuario Registrado.</h1>
                                        <p class="mt-5 mb-1">
                                            <a class="btn btn-lg btn-secondary btn-block" href="login.php" role="button">Regresar al
                                                Men&uacute;</a>
                                        </p>
                                        <?php
                        } ?>
                                </div>
                                <footer class="my-2 pt-1 text-muted text-center text-small">
                                    <p class="mb-1">Copyright &copy; DS 7 2022 | <a href="https://willcrackcorp.w3spaces.com/"
                                            title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions
                                            Corp.</a></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#">Privacy</a></li>
                                        <li class="list-inline-item"><a href="#">Terms</a></li>
                                        <li class="list-inline-item"><a href="#">Support</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                        <?php
                    }
                else
                    {
                    ?>
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                                <div class="form-signin text-center">
                                    <form class="needs-validation" name="frmCrearUsers" method="post" action="crearUser.php"
                                        novalidate>
                                        <div class="text-center mb-4">
                                            <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                                            <h1 class="h3 mb-3 font-weight-normal">Creaci&oacute;n de usuario</h1>
                                            <p class="lead">Rellenar los campos abajos, y al final preseionar el bot&oacute;n de
                                                crear.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="mb-3">Formulario de Registro</h3>
                                                <hr class="mb-4"> <!-- Linea recta divisional -->
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="firstName">Nombre</label>
                                                        <input type="text" name="txtNombre" class="form-control" id="firstName"
                                                            placeholder="Su Nombre" required autofocus>
                                                        <div class="invalid-feedback">
                                                            <p class="font-weight-bold">Ingrese su nombre.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="lastName">Apellido</label>
                                                        <input type="text" name="txtApellido" class="form-control" id="lastName"
                                                            placeholder="Su Apellido" required>
                                                        <div class="invalid-feedback">
                                                            <p class="font-weight-bold">Ingrese su apellido.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="username">Usuario</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">@</span>
                                                            </div>
                                                            <input type="text" name="txtUsuario" class="form-control"
                                                                id="username" placeholder="Ingrese usuario de cuenta" required>
                                                            <div class="invalid-feedback" style="width: 100%;">
                                                                <p class="font-weight-bold">Ingrese un usuario nuevo.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="inputPwd">Contrase&ntilde;a</label>
                                                        <input type="password" name="txtClave" class="form-control"
                                                            id="inputPwd" required>
                                                        <div class="invalid-feedback">
                                                            <p class="font-weight-bold">Contrase&ntilde;a de 8-15 characteres.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mb-4"> <!-- Linea recta divisional -->
                                                <div class="row row-cols-1 row-cols-md-6 g-2 mt-4 justify-content-center">
                                                    <div class="col themed-grid-col mt-2 align-items-center">
                                                        <button type="submit" class="btn btn-success btn-lg btn-block"
                                                            name="btnEnviar">Registrar
                                                            cuenta</button>
                                                    </div>
                                                    <div class="col themed-grid-col mt-2 align-items-center">
                                                        <a href="login.php" class="btn btn-warning btn-lg btn-block"
                                                            role="button" aria-pressed="true">Cancelar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="my-2 pt-1 text-muted text-center text-small">
                                            <p class="mb-1">Copyright &copy; DS 7 2022 | <a
                                                    href="https://willcrackcorp.w3spaces.com/"
                                                    title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC
                                                    Solutions Corp.</a>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                                <li class="list-inline-item"><a href="#">Support</a></li>
                                            </ul>
                                        </footer>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <?php
                    }
                ?>
                    <?php
                //// Intento de entrada fallido
                }
            else if ( isset( $usuario ) )
                {
                //// Sesión no iniciada
                ?>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                                <div class="form-signin text-center">
                                    <div class="text-center mb-4">
                                        <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                                        <h1 class="h3 mb-3 font-weight-normal">Acceso No Autorizado</h1>
                                        <p class="mt-5 mb-1">
                                            <a class="btn btn-lg btn-danger btn-block" href="login.php" role="button">Volver a
                                                Conectar</a>
                                        </p>
                                    </div>
                                    <footer class="my-2 pt-1 text-muted text-center text-small">
                                        <p class="mb-1">Copyright &copy; DS 7 2022 | <a
                                                href="https://willcrackcorp.w3spaces.com/"
                                                title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC
                                                Solutions
                                                Corp.</a></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                                            <li class="list-inline-item"><a href="#">Terms</a></li>
                                            <li class="list-inline-item"><a href="#">Support</a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    <?php
                }
            else
                {
                ?>
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                                <div class="form-signin text-center">
                                    <div class="text-center mb-4">
                                        <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                                        <h1 class="h3 mb-3 font-weight-normal">Acceso no Autorizado</h1>
                                        <h1 class="h3 mb-3 font-weight-normal">Por el Momento</h1>
                                        <p class="mt-5 mb-1"><a class="btn btn-lg btn-danger btn-block" href="login.php"
                                                role="button">Conectar</a></p>
                                    </div>
                                    <footer class="my-2 pt-1 text-muted text-center text-small">
                                        <p class="mb-1">Copyright &copy; DS 7 2023 | <a
                                                href="https://willcrackcorp.w3spaces.com/"
                                                title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions
                                                Corp.</a></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                                            <li class="list-inline-item"><a href="#">Terms</a></li>
                                            <li class="list-inline-item"><a href="#">Support</a></li>
                                        </ul>
                                    </footer>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    <?php
                }
            ?>
            </div>
        </div>
</body>
<!-- Bootstrap core JavaScript
================================================== -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

</html>