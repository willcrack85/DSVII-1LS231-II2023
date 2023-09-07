<?php
    $precio1 = $_POST['vPrecio1'];
    $precio2 = $_POST['vPrecio2'];
    $precio3 = $_POST['vPrecio3'];
    $media = ($precio1 + $precio2 + $precio3) / 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #20">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 3.2</title>
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
				<h1 class="display-4">DS7 - Laboratorio 3.2</h1>
                <p class="lead">Calcular precio promedio.</p>
                <hr class="my-4">
            </div>
        </div>
        <div class='row'>
            <div class='cover-jumbotronWC col-md-12 col-md-auto border border-white'>
                <h3 class="text-center">CALCULO DEL PRECIO MEDIO DE UN PRODUCTO</h3>
                <hr class="my-4">
                <div class="form-group row">
                    <label for="txtResultado1" class="col-sm-10 col-form-label">
                        Precio producto en el eestablecimiento #1:
                    </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="txtResultado1" placeholder='<?php echo $precio1;?>'readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtResultado2" class="col-sm-10 col-form-label">
                        Precio producto en el eestablecimiento #2:
                    </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="txtResultado2" placeholder='<?php echo $precio2;?>'readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtResultado3" class="col-sm-10 col-form-label">
                        Precio producto en el eestablecimiento #3:
                    </label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="txtResultado3" placeholder='<?php echo $precio3;?>'readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="txtToral" class="col-sm-8 col-form-label">
                        El precio medio del producto es de:
                    </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="txtToral" placeholder='<?php echo $media;?>' readonly>
                    </div>
                </div>
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