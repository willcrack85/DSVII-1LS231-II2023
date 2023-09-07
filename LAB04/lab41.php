<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #22">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 4.1</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="dist/ico/wc.ico"/>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dist/css/cover.css" rel="stylesheet">
</head>
<body>
<form name="frmIndicador" method="POST" action="lab41.php">
	<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand">Desarrollo de Software VII - 2023</h3>
            </div>
        </header>
		<div class="row">
			<div class="cover-jumbotronWC text-center col-md-12 col-md-auto border border-white">
				<h1 class="display-4">DS7 - Laboratorio 4.1</h1>
                <p class="lead">Crear una aplicaci&aacute;on web en la cual se puedan elegir 3 imagenes de manera dinamica dependiendo del valor introducido por el usuario, este ser&aacute; un indicador de desempe&ntilde;o en las ventas.</p>
                <hr class="my-4">
            </div>
        </div>
        <?php
        if(array_key_exists('btnEnviar', $_POST)){
            echo "<div class='row'>";
            echo "<div class='cover-jumbotronWC text-center col-md-12 col-md-auto border border-white'>";
            echo "<h3>INDICADOR DE DESEMPE&Ntilde;O EN VENTAS</h3>";
            echo "<div class='form-group row'>";
            if($_REQUEST['vPorcentaje'] != ""){
                if($_REQUEST['vPorcentaje']>=80){
                    echo "<div class='row mx-auto p-3'>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/feliz.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Muy Bien..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card text-white bg-transparent border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/feliz.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Muy Bien..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card .img-fluid text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/feliz.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Muy Bien..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div></div>";                   
                }else if($_REQUEST['vPorcentaje'] >= 50 && $_REQUEST['vPorcentaje'] <= 79){
                    echo "<div class='row mx-auto p-3'>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/indesizo.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Hay Que Mejorar..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card text-white bg-transparent border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/indesizo.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Hay Que Mejorar..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card .img-fluid text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/indesizo.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Hay Que Mejorar..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div></div>";
                }else{
                    echo "<div class='row mx-auto p-3'>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/triste.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Que Mal..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card text-white bg-transparent border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/triste.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Que Mal..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div>";
                    echo "<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4'>";
                    echo "<div class='card .img-fluid text-white bg-dark border-light mb-3' style='width:auto; margin: auto'>";
                    echo "<img src='img/triste.gif' class='card-img-top' alt='WC'/>";
                    echo "<div class='card-block'>";
                    echo "<h4 class='card-title'>Que Mal..!</h4>";
                    echo "<p class='card-text'>El porcentaje ingresado es: $_REQUEST[vPorcentaje].</p>";
                    echo "</div></div></div></div>";
                }
            }else{
                echo "<label for='txtValor' class='col-sm-7 col-form-label'>El porcentaje ingresado es:</label>";
                echo "<div class='col-sm-2'>";
                echo "<input type='text' name='vPorcentaje' placeholder='0~100' class='form-control' id='txtValor'>";
                echo "</div>";
                echo "<button class='btn btn-primary col-md-3 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>";
                echo "<div class='form-group text-center col-md-12'>";
                echo "<br><br><h5>No agregó ningún porcentaje...</h5>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }else{
            ?>
            <div class='row'>
                <div class='text-center cover-jumbotronWC col-md-12 col-md-auto border border-white'>
                    <h3>INDICADOR DE DESEMPE&Ntilde;O EN VENTAS</h3>
                    <div class="form-group row">
                        <label for="txtValor" class="col-sm-7 col-form-label">Porcentaje de Ventas de (0% a 100%):</label>
                        <div class="form-group col-sm-2 mb-2">
                            <label for="txtValor" class="sr-only">0~100</label>
                            <input type="text" name="vPorcentaje" class="form-control" id="txtValor" placeholder="0~100">
                        </div>
                        <button class='btn btn-primary mb-2' type='submit' name='btnEnviar'>Confirmar Indicador</button>
                    </div>
                </div>
            </div>
            <?php
        }?>
        <footer class="mastfoot mt-auto text-center">
			<div class="inner">
				<b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a> Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </div>
        </footer>
    </div>
</form>
</body>
</html>