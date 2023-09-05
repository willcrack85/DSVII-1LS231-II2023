<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #18">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 2.10</title>
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
				<h1 class="display-4">DS7 - Laboratorio 2.10</h1>
                <p class="lead">Matrices.</p>
                <hr class="my-4">
				<!-- Comentarios dentro de PHP -->
                <?php
                    $persona = array(
                        array("nombre"=>"Rosa","estatura"=>168,"sexo"=>"F"),
                        array("nombre"=>"Ignacio","estatura"=>175,"sexo"=>"M"),
                        array("nombre"=>"Daniel","estatura"=>172,"sexo"=>"M"),
                        array("nombre"=>"Ruben","estatura"=>182,"sexo"=>"M"),
                    );
                    echo "<b>DATOS SOBRE EL PERSONAL</b><hr>";
                    $numPersonas = count($persona);
                    for($i = 0;$i < $numPersonas;$i++){
                        echo "Nombre: <b>",$persona[$i]['nombre'],"</b><br>";
                        echo "Estatura: <b>",$persona[$i]['estatura'],"</b><br>";
                        echo "Sexo: <b>",$persona[$i]['sexo'],"</b><br>";
                    }
                ?>
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