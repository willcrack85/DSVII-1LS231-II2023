<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Template con PHP en Laboratorio #24">
    <meta name="keywords" content="HTML5, CSS, Javascript"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="WillCrack Solution Corp.">
    <title>Laboratorio 4.3</title>
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
				<h1 class="display-4">DS7 - Laboratorio 4.3</h1>
                <p class="lead">Llenar un arreglo unidimensional de 20 elementos, luego de llenar el arreglo mostrar en pantalla la posici&oacute;n y el valor del elemento mayor almacenado en el arreglo. Todos los elementos deben ser diferentes.</p>
                <hr class="my-4">
            </div>
        </div>
        <div class='row'>
            <div class='cover-jumbotronWC col-md-12 col-md-auto border border-white'>
                <h3 class="text-center">MANEJO DE ARREGLOS</h3>
                <!-- Comentarios dentro de PHP -->
                <?php
                $intVector = array();
                for($i = 0;$i < 20;$i++){
                    //Cargar el vector $intVector[$i] con 20 elementos 
                    //de forma aleatoria con la funcion rand(0, 100)
                    $intVector[$i] = rand(0,100);
                }
                echo "<table class='table table-dark text-center'>";
                $cont = 0;
                for($n1 = 1;$n1 <= 5;$n1++){
                    echo "<tr>";
                    for($n2 = 1;$n2 <= 4;$n2++){
                        printf("<td>%d</td>",$intVector[$cont]);
                        $cont++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
                function CalculoMayor($intArreglo){
                    $intPosicion=0;
                    $intValor=$intArreglo[0];
                    for($e = 1;$e < count($intArreglo);$e++){
                        if($intArreglo[$e] > $intValor){
                            $intValor = $intArreglo[$e];
                            $intPosicion=$e;
                        }
                    }
                    return $intPosicion;
                }?>
            </div>
        </div>
        <div class='row'>
            <div class='text-center cover-jumbotronWC col-md-12 col-md-auto border border-white'>
                <!-- <h3>MANEJO DE ARREGLOS P1</h3> -->
                <?php $intRest = CalculoMayor($intVector);?>
                <h3>La posici&oacute;n [ <?php echo $intRest + 1;?> ]<small class="text-muted"> tiene el valor m&aacute;s alto << <?php echo $intVector[$intRest]?> >></small></h3>
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