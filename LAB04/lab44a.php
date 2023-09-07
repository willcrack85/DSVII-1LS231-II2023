<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #25">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 4.4</title>
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
				<h1 class="display-4">DS7 - Laboratorio 4.4</h1>
                <p class="lead text-justify">Llenar un arreglo solo con n&uacute;meros pares. Si se introduce un n&uacute;umero impar, solicitar al usuario introduzca un valor correcto hasta que as&iacute; sea; luego continuar con el siguiente n&uacute;mero.</p>
                <hr class="my-4">
                <h3>MANEJO DE ARREGLOS</h3>
                <form name='frmDatos' method='POST' action='lab44b.php'>
                    <?php
                    if(array_key_exists('btnEnviar',$_POST)){
                        $valor = $_POST['cont1'];
                        echo "<div class='form-row'>";
                        if($_REQUEST['vNumero'] != ""){
                            if($_REQUEST['vNumero'] % 2 == 0){
                                $intNumeroPar = $_POST['lblPar'].":".$_POST['vNumero'];
                                if($_REQUEST['cont1'] < 9){
                                    $valor = $_POST['cont1'] + 1;
                                    echo "<div class='col-7 mt-3 mb-2'>";
                                    echo "<label class='col-form-label'>Introdusca un N&uacute;mero par hasta llegar a (9):</label>";
                                    echo "</div><div class='col mt-3 mb-2'>";
                                    echo "<input type='text' name='vNumero' class='form-control'>";
                                    echo "<input type='hidden' name='cont' value='$valor'>";
                                    echo "<input type='hidden' name='lblPar' value='$intNumeroPar'>";
                                    echo "</div><div class='col mt-3 mb-2'>";
                                    echo "<button class='form-control btn btn-outline-primary' type='submit' name='btnEnviar'>Procesar Datos</button></div>";
                                    echo "<div class='form-group text-center col-md-12'>";
                                    echo "<br><h5>Ingresaste un valor que es par, te quedan faltante (",9-$_REQUEST['cont1'],")...</h5>";
                                    echo "</div>";
                                }else{
                                    echo "<div class='col-7 mt-3 mb-2'>";
                                    echo "<label class='col-form-label'>Introdusca un N&uacute;mero par hasta llegar a (9):</label>";
                                    echo "</div><div class='col mt-3 mb-2'>";
                                    echo "<input type='text' name='vNumero' class='form-control' readonly>";
                                    echo "</div><div class='col mt-3 mb-2'>";
                                    echo "<button class='form-control btn btn-outline-primary' type='submit' name='btnEnviar' disabled>Procesar Datos</button></div>";
                                    echo "<div class='form-group text-center col-md-12'>";
                                    echo "<br><h5>Se complet&oacute; el total de ingreso requeridos a 9...!</h5>";
                                    echo "</div>";
                                }
                            }else{
                                $intNumeroPar = $_POST['lblPar'];
                                echo "<div class='col-7 mt-3 mb-2'>";
                                echo "<label class='col-form-label'>Introdusca un N&uacute;mero par hasta llegar a (9):</label>";
                                echo "</div><div class='col mt-3 mb-2'>";
                                echo "<input type='text' name='vNumero' class='form-control'>";
                                echo "<input type='hidden' name='cont' value='$valor'>";
                                echo "<input type='hidden' name='lblPar' value='$intNumeroPar'>";
                                echo "</div><div class='col mt-3 mb-2'>";
                                echo "<button class='form-control btn btn-outline-primary' type='submit' name='btnEnviar'>Procesar Datos</button></div>";
                                echo "<div class='form-group text-center col-md-12'>";
                                echo "<br><h5>El N&uacute;mro no es par, ingrese otro valor en el recuadro...</h5>";
                                echo "</div>";
                            }
                        }else{
                            $intNumeroPar = $_POST['lblPar'];
                            echo "<div class='col-7 mt-3 mb-2'>";
                            echo "<label class='col-form-label'>Introdusca un N&uacute;mero par hasta llegar a (9):</label>";
                            echo "</div><div class='col mt-3 mb-2'>";
                            echo "<input type='text' name='vNumero' placeholder='0 ~ 9' class='form-control'>";
                            echo "<input type='hidden' name='cont' value='$valor'>";
                            echo "<input type='hidden' name='lblPar' value='$intNumeroPar'>";
                            echo "</div><div class='col mt-3 mb-2'>";
                            echo "<button class='form-control btn btn-danger' type='submit' name='btnEnviar'>Procesar Datos</button></div>";
                            echo "<div class='form-group text-center col-md-12'>";
                            echo "<br><h5>No agregó ningún valor en el campo arriba...</h5>";
                            echo "</div>";
                        }
                        echo "</div>";
                    }else{
                        $intNumeroPar = null;?>
                        <div class='form-row'>
                            <div class='col-7 mt-3 mb-2'>
                                <label class='col-form-label'>Introdusca un N&uacute;mero par hasta llegar a (9):</label>
                            </div>
                            <div class='col mt-3 mb-2'>
                                <input type='text' name='vNumero' class='form-control'>
                                <input type="hidden" name="cont" value="1">
                                <input type="hidden" name="lblPar" value="">
                            </div>
                            <div class='col mt-3 mb-2'>
                                <button class='form-control btn btn-outline-success' type='submit' name='btnEnviar'>
                                    Procesar Datos
                                </button>
                            </div>
                        </div>
                    <?php
                    }?>
                </form>
                <hr class="my-4">
            </div>
        </div>
        <div class='row'>
            <div class='cover-jumbotronWC text-center col-md-12 col-md-auto border border-white'>
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">WC</th>
                            <th scope="col">1</th>
                            <th scope="col">2</th>
                            <th scope="col">3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $intVector = explode(":",$intNumeroPar);
                        $ini = count($intVector);
                        for($i = $ini;$i < 9;$i++){
                            $intVector[$i] = 0;
                        }
                        $cont = 0;
                        define('TABLA',3);
                        for($fila = 1;$fila <= TABLA;$fila++){
                            echo "<tr>";
                            print "<th scope='row'>$fila</th>";
                            for($colu = 1;$colu <= TABLA;$colu++){
                                printf("<td>%d</td>",$intVector[$cont]);
                                $cont++;
                            }
                            echo "</tr>";
                        }?>
                    </tbody>
                </table>
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