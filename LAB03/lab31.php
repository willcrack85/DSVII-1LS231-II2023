<?php
    $diametro = $_POST['diametro'];
    $altura = $_POST['altura'];
    $radio = $diametro / 2;
    $PI = 3.141593;
    $volumen = ($PI * $radio * $radio * $altura);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #19">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 3.1</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="dist/ico/wc.ico"/>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dist/css/cover.css" rel="stylesheet">
</head>
<body>
	<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand">Desarrollo de Software VII - 2023</h3>
            </div>
        </header>
		<div class="row">
			<div class="cover-jumbotronWC text-center col-md-12 col-md-auto border border-white">
				<h1 class="display-4">DS7 - Laboratorio 3.1</h1>
                <p class="lead">Calcular volumen de un cilindro basado en su altura y el diametro en metro.</p>
                <hr class="my-4">
            </div>
        </div>
        <div class='row'>
            <div class='cover-jumbotronWC text-center col-md-12 col-md-auto border border-white'>
                <h3>CALCULO DEL VOLUMEN DE UN CILINDRO</h3>
                <hr class="my-4">
                <label for='cResultado'>Vol. de un Cilindro en mts.</label>
                <input type='text' name='cResultado' placeholder='<?php echo $volumen;?>' readonly>
                <hr class="my-4">
            </div>
        </div>
        <footer class="mastfoot mt-auto text-center">
			<div class="inner">
				<b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a> Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </div>
        </footer>
    </div>
</body>
</html>