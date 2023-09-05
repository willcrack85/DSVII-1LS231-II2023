<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #3">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 1.3</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="dist/ico/wc.ico"/>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dist/css/sticky.css" rel="stylesheet">
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="display-4">DS7 - Laboratorio 1.3</h1>
        <p class="lead">Hacer un programa que muestre en pantalla informacion de PHP con la funcion phpinfo(). Muestre la informacion centrada horizontalmente en la pantalla.</p>
        <hr class="my-4">
        <!-- Comentarios dentro de PHP -->
        <div class='table-responsive'>
            <?php echo phpinfo();?>
        </div>
    </div>
	<footer class="footer text-center">
        <div class="container">
            <p>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a>Copyright &copy; DS 7 - 2023 | William Miranda</p>
        </div>
    </footer>
</body>
</html>