<?php
session_start ();
if ( isset( $_REQUEST[ 'txtUsuario' ] ) && isset( $_REQUEST[ 'txtClave' ] ) )
    {
    $usuario     = $_REQUEST[ 'txtUsuario' ];
    $clave       = $_REQUEST[ 'txtClave' ];
    $salt        = substr ( $usuario, 0, 2 );
    $clave_crypt = crypt ( $clave, $salt );
    require_once( "../class/usuarios.php" );
    $objUsuarios = new usuarios ();
    // echo "<script>console.log('usuario: " . $usuario . "');</script>";
    // echo "<script>console.log('clave: " . $clave . "');</script>";
    $usuario_validado = $objUsuarios->getValidarUsuario ( $usuario, $clave_crypt );
    foreach ( $usuario_validado as $array_resp )
        {
        foreach ( $array_resp as $value )
            {
            $nfilas = $value;
            }
        }
    if ( $nfilas > 0 )
        {
        $usuario_valido               = $usuario;
        $_SESSION[ "usuario_valido" ] = $usuario_valido;
        }
    }
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" class="h-100" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #58">
    <meta name="keywords" content="HTML5, CSS, Javascript" />
    <meta name="author" content="WillCrack Solution Corp.">
    <meta name="generator" content="WC 0.0.0">
    <title>Laboratorio 14 - Login</title>
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
                <?php
                //// Sesión iniciada
                if ( isset( $_SESSION[ "usuario_valido" ] ) )
                    {
                    ?>
                    <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                        <div class="form-signin text-center">
                            <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                            <h1 class="display-4 mb-5">Gestion de Noticias</h1>
                            <div class="list-group">
                                <a href="../directorio/lab142.php"
                                    class="list-group-item list-group-item-action list-group-item-primary">Listar
                                    todas las Noticias</a>
                                <a href="../directorio/lab143.php"
                                    class="list-group-item list-group-item-action list-group-item-info">Listar
                                    Noticias por Partes</a>
                                <a href="../directorio/lab144.php"
                                    class="list-group-item list-group-item-action list-group-item-success">Buscar
                                    Noticia</a>
                                <?php if ( $_SESSION[ "usuario_valido" ] === "testuser" )
                                { ?>
                                    <a href="crearUser.php"
                                        class="list-group-item list-group-item-action list-group-item-dark">Crear
                                        Nuevo Usuario</a>
                                <?php } ?>
                            </div>
                            <p class="mt-5 mb-1"><a class="btn btn-lg btn-success btn-block" href="logout.php"
                                    role="button">Desconectar</a></p>
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
                    <?php
                    }
                else if ( isset( $usuario ) )
                    {
                    ?>
                        <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                            <div class="form-signin text-center">
                                <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                                <h1 class="h3 mb-3 font-weight-normal">Acceso No Autorizado</h1>
                                <p>Se requiere que pueda verificar nuevamente el ingreso.</p>
                                <p class="mt-5 mb-1">
                                    <a class="btn btn-lg btn-danger btn-block" href="login.php" role="button">Volver a
                                        Conectar</a>
                                </p>
                                <p class="mt-5 mb-1">Copyright &copy; DS 7 2021 | William Miranda</p>
                                <p class="mt-1 mb-1">Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/"
                                        title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions
                                        Corp.</a></p>
                            </div>
                        </div>
                    <?php
                    }
                else
                    {
                    ?>
                        <div class="jumbotron-wc col-md-12 col-md-auto mx-bg-top-linear">
                            <form class="form-signin" name="frmLogin" action="login.php" method="post">
                                <div class="text-center mb-4">
                                    <img class="mb-4" src="../assets/ico/favicon.ico" alt="Logo" width="72" height="72">
                                    <h1 class="h3 mb-3 font-weight-normal">Inicio de Sesi&oacute;n</h1>
                                    <p>Esta zona tiene el acceso restringido, para ingresar debe ser validado.</p>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="txtUsuario" size="15" id="txtUsuario"
                                        class="form-control text-center" placeholder="Usuario" required autofocus>
                                    <label for="txtUsuario">Usuario</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" name="txtClave" size="15" id="txtContrasena"
                                        class="form-control text-center" placeholder="clave" required>
                                    <label for="txtContrasena">Contrase&ntilde;a</label>
                                </div>
                                <div class="checkbox mb-3">
                                    <label><input type="checkbox" value="remember-me"> Recordar Credenciales</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                                <p class="mt-1 text-mute text-justify">
                                    NOTA: reportar con el <a href="mailto:webmaster@wcsolutioncorp.org">Administrador</a> del
                                    sitio
                                    &oacute; [ <a href='crearUser.php'>crear cuenta nueva.</a> ]
                                </p>
                                <p class="mt-5 mb-1">Copyright &copy; DS 7 2022 | William Miranda</p>
                                <p class="mt-1 mb-1">Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/"
                                        title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>
                                </p>
                            </form>
                        </div>
                    <?php
                    }
                ?>
            </div>
            <div class="col-md-3 themed-grid-col"></div>
        </div>
    </div>
</body>

</html>