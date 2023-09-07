<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #26">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 4.5</title>
    <!-- Icono de la página WEB -->
    <link rel="shortcut icon" type="image/x-ico" href="dist/ico/wc.ico"/>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dist/css/cover.css" rel="stylesheet">
</head>
<body>
<form name="formMatriz" method="POST" action="lab45.php">
	<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand">Desarrollo de Software VII - 2023</h3>
            </div>
        </header>
		<div class="row">
			<div class="cover-jumbotronWC text-center col-md-12 col-md-auto border border-white">
				<h1 class="display-4">DS7 - Laboratorio 4.5</h1>
                <p class="lead">Dise&ntilde;ar una aplicaci&oacute;n web en PHP que genere una matr&iacute;z identidad de orden N (Donde N es un n&uacute;mero Par). La matr&iacute;z identidad tiene todos los elementos de la diagonal principal igual a uno (1), todos los dem[as elementos son igual a cero (0).</p>
                <hr class="my-4">
                <?php
                if(array_key_exists('btnEnviar',$_POST)){
                    echo "<div class='jumbotron jumbotron-fluid jumbotron-dentro bg-info border border-white'>";
                    echo "<div class='container'>";
                    echo "<h3>GENERADOR DE MATR&Iacute;Z IDENTIDAD ORDEN (N)</h3>";
                    echo "<div class='form-row'>";
                    if($_REQUEST['txtValor'] != ""){
                        if(!$_REQUEST['txtValor'] == 0){
                            if($_REQUEST['txtValor'] % 2 == 0){
                                $intNum = $_POST['txtValor'];
                                echo "<div class='form-group text-center col-md-12'>";
                                echo "<br><br><h5>Has terminado de registrar el arreglo, el mismo es...</h5>";
                                echo "<div class='table-responsive'>";
                                echo "<table class='table table-striped table-dark'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th scope='col' bgcolor=blue>WC</th>";
                                for($X = 1;$X <= $intNum;$X++){
                                    echo "<th scope='col' bgcolor=red><$X></th>";
                                }
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                for($fila = 1;$fila <= $intNum;$fila++){
                                    echo "<tr>";
                                    print "<th scope='row' bgcolor=green><$fila></th>";
                                    for($colu = 1;$colu <= $intNum;$colu++){
                                        if($colu == $fila){
                                            $n = 1;
                                            printf("<td bgcolor=orange>%d</td>",$n);
                                        }else{
                                            $n = 0;
                                            printf("<td>%d</td>",$n);
                                        }
                                    }
                                    echo "</tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                echo "</div>";
                                echo "</div>";
                            }else{
                                echo "<div class='col-7 mt-3 mb-2'>";
                                echo "<label class='col-form-label'>Ingresar un n&uacute;mero par para crear la matr&iac&iacute;z identidad:</label></div><div class='col mt-3 mb-2'>";
                                echo "<input id='wc-center' type='text' name='txtValor' placeholder='<N&Uacute;MERO PAR>' class='form-control'></div><div class='col mt-3 mb-2'>";
                                echo "<button class='form-control btn btn-outline-warning' type='submit' name='btnEnviar'>
                                Procesar Datos</button></div>";
                                echo "<div class='form-group text-center col-md-12'>";
                                echo "<div class='alert alert-warning' role='alert'>";
                                echo "<p class='h4'>El N&uacute;mro no es par, ingrese otro valor en el recuadro...</p>";
                                echo "</div></div>";
                            }
                        }else{
                            echo "<div class='col-7 mt-3 mb-2'>";
                            echo "<label class='col-form-label'>Ingresar un n&uacute;mero par para crear la matr&iac&iacute;z identidad:</label></div><div class='col mt-3 mb-2'>";
                            echo "<input id='wc-center' type='text' name='txtValor' placeholder='<N&Uacute;MERO PAR>' class='form-control'></div><div class='col mt-3 mb-2'>";
                            echo "<button class='form-control btn btn-outline-danger' type='submit' name='btnEnviar'>Procesar Datos</button></div>";
                            echo "<div class='form-group text-center col-md-12'>";
                            echo "<div class='alert alert-success' role='alert'>";
                            echo "<p class='h4'>No se puede trabajar matrices con (0) Fila y Columna. Por Favor, vuelva a intentar...</p>";
                            echo "</div></div>";
                        }
                    }else{
                        echo "<div class='col-7 mt-3 mb-2'>";
                        echo "<label class='col-form-label'>Ingresar un n&uacute;mero par para crear la matr&iac&iacute;z identidad:</label></div><div class='col mt-3 mb-2'>";
                        echo "<input id='wc-center' type='text' name='txtValor' placeholder='<N&Uacute;MERO PAR>' class='form-control'></div><div class='col mt-3 mb-2'>";
                        echo "<button class='form-control btn btn-outline-danger' type='submit' name='btnEnviar'>Procesar Datos</button></div>";
                        echo "<div class='form-group text-center col-md-12'>";
                        echo "<div class='alert alert-danger' role='alert'>";
                        echo "<p class='h4'>No agregó ningún valor num&eacute;rico, Por Favor, vuelva a intentar...</p>";
                        echo "</div></div>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }else{
                    ?>
                    <div class="container center">
                        <div class="row text-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>
                                                <div class="jumbotron bg-info border border-white" style="padding-bottom:0px; padding-top:0px; margin-bottom:2px;">
                                                    <h3 class='font-weight-bold' style='padding:15px;'>MANEJO DE ARREGLOS</h3>
                                                    <hr class="my-4">
                                                    <div class='form-row'>
                                                        <div class='col-7 mt-3 mb-2'>
                                                            <label class='col-form-label text-left'>
                                                                Ingresar un n&uacute;mero par para crear la matr&iacute;z identidad:
                                                            </label>
                                                        </div>
                                                        <div class='col mt-3 mb-2'>
                                                            <input id='wc-center' type='text' name='txtValor' placeholder='<N&Uacute;MERO PAR>' class='form-control'>
                                                        </div>
                                                        <div class='col mt-3 mb-2'>
                                                            <button class='form-control btn btn-outline-success' type='submit' name='btnEnviar'>Procesar Datos</button>
                                                        </div>
                                                    </div>
                                                    <blockquote class="blockquote text-center">
                                                        <footer class="display-4 blockquote-footer">Edicion Limitada</footer>
                                                    </blockquote>
                                                </div>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                }?>
            </div>
        </div>
        <footer class="mastfoot mt-auto text-center">
			<div class="inner">
				<b>Dise&ntilde;ado por <a href="https://willcrackcorp.w3spaces.com/" title="WillCrack Solutions Corp., Panam&aacute;" target="_blank">WC Solutions Corp.</a> Copyright &copy; DS 7 - 2023 | William Miranda</b>
            </div>
        </footer>
    </div>
</form>
</body>
</html>