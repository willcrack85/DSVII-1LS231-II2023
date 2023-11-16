<?php

/**
 * Description of miClase_WC
 * Clase que determina por medio de un número de ventas una imagen de
 * satisfacción para quien se registre.
 * @author WCcorp
 */

class miClase_WC
{
    protected $Venta;
    private $img;
    private $msg;

    function __construct($ValorRecibido)
    {
        $this->Venta = $ValorRecibido;
    }

    function calcVenta()
    {
        switch ($this->Venta) {
            case $this->Venta >= 1 && $this->Venta <= 49:
                $this->img = 'assets/img/triste.gif';
                $this->msg = 'Que Mal..!';
                break;
            case $this->Venta >= 50 && $this->Venta <= 79:
                $this->img = 'assets/img/indesizo.gif';
                $this->msg = 'Hay Que Mejorar..!';
                break;
            case $this->Venta >= 80 && $this->Venta <= 100:
                $this->img = 'assets/img/feliz.gif';
                $this->msg = 'Muy Bien..!';
                break;
            default:
                $this->img = 'Sin_Registro';
                break;
        }
        return $this->img;
    }

    function calcMsg()
    {
        return $this->msg;
    }
}

/**
 * Description of miClase_WC1
 * Llenar un arreglo unidimensional de 20 elementos, luego de llenar el arreglo 
 * mostrar en pantalla la posicion y el valor del elemento mayor almacenado en 
 * el arreglo. Todos los elementos deben ser diferentes.
 * @author WCcorp
 */

class miClase_WC1
{
    public $intVector = array();

    function __construct()
    {
        for ($i = 0; $i < 20; $i++) {
            //Cargar el vector $intVector[$i] con 20 elementos
            //de forma aleatoria con la funcion rand(0, 100)
            $this->intVector[$i] = rand(0, 100);
        }
    }

    function imprimeTabla()
    {
        echo "<div class='table-responsive-sm'>";
        echo "<table class='table table-bordered table-dark'>";
        $cont = 0;
        for ($n1 = 1; $n1 <= 5; $n1++) {
            echo "<tr>";
            for ($n2 = 1; $n2 <= 4; $n2++) {
                printf("<td>%d</td>", $this->intVector[$cont]);
                $cont++;
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }

    function calcularMayor()
    {
        $intPosicion = 0;
        $intValor = $this->intVector[0];
        for ($e = 1; $e < count($this->intVector); $e++) {
            if ($this->intVector[$e] > $intValor) {
                $intValor = $this->intVector[$e];
                $intPosicion = $e;
            }
        }
        return $intPosicion;
    }
}

/**
 * Description of miClase_WC2
 * Llenar un arreglo solo con n&uacute;meros pares. Si se introduce un 
 * n&uacute;umero impar, solicitar al usuario introduzca un valor correcto hasta 
 * que as&iacute; sea; luego continuar con el siguiente n&uacute;mero.
 * @author WCcorp
 */

class miClase_WC2
{
    function guardarCadena($valorTexto, $hdnNumeroPar)
    {
        if (!($hdnNumeroPar == null)) {
            $strCadenaUnion = $hdnNumeroPar . ":" . $valorTexto;
        } else {
            $strCadenaUnion = $valorTexto;
        }
        return $strCadenaUnion;
    }

    function imprimirTabla($strCadenaTemp)
    {
        echo "<div class='table-responsive-sm'>";
        echo "<table class='table table-striped table-dark'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='col' class='bg-gradient-primary'>WC</th>";
        echo "<th scope='col' class='bg-danger text-white'>1</th>";
        echo "<th scope='col' class='bg-danger text-white'>2</th>";
        echo "<th scope='col' class='bg-danger text-white'>3</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        $intVector = explode(":", $strCadenaTemp);
        $ini = count($intVector);
        for ($i = $ini; $i < 9; $i++) {
            $intVector[$i] = 0;
        }
        $cont = 0;
        define('TABLA', 3);
        for ($fila = 1; $fila <= TABLA; $fila++) {
            echo "<tr>";
            print "<th scope='row' class='bg-info text-white'>$fila</th>";
            for ($colu = 1; $colu <= TABLA; $colu++) {
                printf("<td>%d</td>", $intVector[$cont]);
                $cont++;
            }
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    }
}
