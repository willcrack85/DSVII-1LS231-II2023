<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #21">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 3.3</title>
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
				<h1 class="display-4">DS7 - Laboratorio 3.3</h1>
                <p class="lead">Obtener el nombre y apellido en un formulario, validar si fueron ingresados.</p>
                <hr class="my-4">
            </div>
        </div>
        <?php
            if(array_key_exists('btnEnviar',$_POST)){
                echo "<div class='row'>";
                echo "<div class='cover-jumbotronWC1 text-center col-md-12 col-md-auto border border-white'>";
                echo "<h3>REGISTRO</h3>";
                echo "<div class='form-group row'>";
                echo "<label for='txtApellido' class='col-sm-2 col-form-label'>Apellido:</label>";
                if($_REQUEST['vApellido'] != ""){
                    echo "<div class='col-sm-4'>";
                    echo "<input type='text' class='form-control' placeholder='$_REQUEST[vApellido]' readonly>";
                    echo "</div>";
                    echo "<div class='col-sm-6'>";
                    echo "<input type='text' class='form-control' placeholder='Apellido ingresados: $_REQUEST[vApellido]' readonly>";
                    echo "</div>";
                }else{
                    echo "<div class='col-sm-4'>";
                    echo "<input type='text' class='form-control' placeholder='$_REQUEST[vApellido]' readonly>";
                    echo "</div>";
                    echo "<div class='col-sm-6'>";
                    echo "<input type='text' class='form-control' placeholder='Favor coloque su Apellido.' readonly>";
                    echo "</div>";
                }
                echo "</div>";
                echo "<div class='form-group row'>";
                echo "<label for='txtNombre' class='col-sm-2 col-form-label'>Nombre:</label>";
                if($_REQUEST['vNombre'] != ""){
                    echo "<div class='col-sm-4'>";
                    echo "<input type='text' class='form-control' placeholder='$_REQUEST[vNombre]' readonly>";
                    echo "</div>";
                    echo "<div class='col-sm-6'>";
                    echo "<input type='text' class='form-control' placeholder='Nombre ingresados: $_REQUEST[vNombre]' readonly>";
                    echo "</div>";
                }else{
                    echo "<div class='col-sm-4'>";
                    echo "<input type='text' class='form-control' placeholder='$_REQUEST[vNombre]' readonly>";
                    echo "</div>";
                    echo "<div class='col-sm-6'>";
                    echo "<input type='text' class='form-control' placeholder='Favor coloque su Nombre.' readonly>";
                    echo "</div>";
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }else{
        ?>
            <div class='row'>
                <div class='cover-jumbotronWC text-center col-md-12 col-md-auto border border-white'>
                    <h3>REGISTRO</h3>
                    <form name='miFormulario' method='POST' action='lab33.php'>
                        <div class="form-group row">
                            <label for="txtNombre" class="col-sm-3 col-form-label">Nombre:</label>
                            <div class="col-sm-6">
                                <input type="text" name="vNombre" class="form-control" id="txtNombre">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="txtApellido" class="col-sm-3 col-form-label">Apellido:</label>
                            <div class="col-sm-6">
                                <input type="text" name="vApellido" class="form-control" id="txtApellido">
                            </div>
                        </div>
                        <div class='form-group text-center col-md-12'>
                            <button class='btn btn-primary col-md-4 col-md-offset-4' type='submit' name='btnEnviar'>Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php
            }
        ?>
        <footer class="mastfoot mt-auto text-center">
			<div class="inner">
				<b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a> Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </div>
        </footer>
    </div>
</body>
</html>