<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #23">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 4.2</title>
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
				<h1 class="display-4">DS7 - Laboratorio 4.2</h1>
                <p class="lead">Realizar una aplicaci&oacute;n web que calcule el factorial de un n&uacute;mero N. Leer el n&uacute;mero desde un formulario HTML y entregar la respuesta en una p&aacute;gina PHP.</p>
                <hr class="my-4">
            </div>
        </div>
        <?php
        if(array_key_exists('btnEnviar',$_POST)){
            echo "<div class='row'>";
            echo "<div class='cover-jumbotronWC col-md-12 col-md-auto border border-white'>";
            echo "<h3>RESULTADO DEL FACTORIAL DE $_REQUEST[vFactorial]</h3>";
            echo "<div class='form-row'>";
            echo "<div class='col-7 mt-3 mb-2'>";
            echo "<label class='col-form-label'>Introdusca un N&uacute;mro (N!):</label>";
            echo "</div>";
            echo "<div class='col mt-3 mb-2'>";
            echo "<input type='text' name='vFactorial' class='form-control' placeholder='#######' readonly>";
            echo "</div><div class='col mt-3 mb-2'>";
            echo "<button class='form-control btn btn-primary' type='submit' name='btnEnviar' disabled>Procesar Datos</button>";
            echo "</div></div>";
            if($_REQUEST['vFactorial'] != ""){
                //Código para el cálculo del Número Factorial
                $intFactorial = $_POST['vFactorial'];
                $Cont = 0;
                $Resultado = 1;
                echo "<div class='form-group text-center col-md-12'>";
                print "<br><br><h5><font size=6 color=#000000>$intFactorial! = </font>";
                for($x = 1;$x <= $intFactorial;$x++){
                    $Resultado *= $x;
                    if($x < $intFactorial){
                        print("<b><font size=6 color=blue>$x * </font></b>");
                    }else{
                        print("<b><font size=6 color=red>$x = $Resultado</font></b>");
                    }
                }
                echo "</h5>";
                echo "</div>";
            }else{
                echo "<div class='form-group text-center col-md-12'>";
                echo "<br><br><h5><font color=#000000>No agregó ningún Número para calcular...</font></h5>";
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
        }?>
        <footer class="mastfoot mt-auto text-center">
			<div class="inner">
				<b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a> Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </div>
        </footer>
    </div>
</body>
</html>