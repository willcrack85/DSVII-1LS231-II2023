<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #5">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 1.5</title>
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
				<h1 class="display-4">DS7 - Laboratorio 1.5</h1>
                <p class="lead">Ajustes al 1.4 anterior, pero colorear las filas alternando gris y blanco. 
                Ademas, el tamano sera una constante: define(TAM, 10).</p>
                <hr class="my-4">
				<!-- Comentarios dentro de PHP -->
				<?php
					define ('TAM', 10);
                    echo "<table class='table table-dark'>";
                    $n = 1;
                    for ($n1 = 1;$n1 <= TAM;$n1++){
                        if ($n1 % 2 == 0)
						    echo "<tr bgcolor='#bdc3d6'>";
                        else
                            echo "<tr>";
                        for($n2 = 1;$n2 <= TAM;$n2++){
							echo "<td>",$n,"</td>";
                            $n = $n + 1;
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
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