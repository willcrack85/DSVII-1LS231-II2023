<?php

/**
 ** Descripcion del class_lib.php
 * @author WCcorp
 ** Laboratorio 6.2: Clase + Instancia de objeto en DISTINTOS Archivos.
 */

class cliente
{
    var $nombre;
    var $numero;
    var $peliculas_alquiladas;

    function __construct($nombre, $numero)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->peliculas_alquiladas = array();
    }

    function __destruct()
    {
        echo "<p style='color: white;'>Destruido: " . $this->nombre . "</p>";
    }

    function dame_numero()
    {
        return $this->numero;
    }
}

/**
 ** Descripcion del class_lib.php
 * @author WCcorp
 ** Laboratorio 6.3: Clase + Instancia de objeto en DISTINTOS Archivos.
 * A continuación, se crearán 3 clases para poner en práctica el conecpto de herencia
 * de POO en PHP, estas serán agregadas al existente archivo class_lib (similar al lab62)
 * este archivo tiene como objetivo albergar las distintas clases y se incluye en el archivo
 * php que necesite instanciar sus objetos. Por temas de comodidad y estándar, es recomendable
 * mantener las clases bajo el concepto de libreria.
 */

class soporte
{
    public $titulo;
    protected $numero;
    private $precio;
    function __construct($tit, $num, $precio)
    {
        $this->titulo = $tit;
        $this->numero = $num;
        $this->precio = $precio;
    }

    public function dame_precio_sin_itbm()
    {
        return $this->precio;
    }

    public function dame_precio_con_itbm()
    {
        return $this->precio * 0.07;
    }

    public function dame_numero_identificacion()
    {
        return $this->numero;
    }

    public function imprime_caractersticas()
    {
        echo " - " . $this->titulo;
        echo "<br> B/:. " . $this->precio . " (ITBM no incluido).";
    }
}

class video extends soporte
{
    protected $duracion;

    function __construct($tit, $num, $precio, $duracion)
    {
        parent::__construct($tit, $num, $precio);
        $this->duracion = $duracion;
    }

    public function imprime_caracteristicas()
    {
        echo "<br>Pelicula en Blu-Ray: ";
        parent::imprime_caractersticas();
        echo "<br>Duracion: " . $this->duracion;
    }
}

class juego extends soporte
{
    protected $consola;                 //Consola del juego ej: DS Lite.
    protected $min_num_jugadores;
    protected $max_num_jugadores;

    function __construct($tit, $num, $precio, $consola, $min_j, $max_j)
    {
        parent::__construct($tit, $num, $precio);
        $this->consola = $consola;
        $this->min_num_jugadores = $min_j;
        $this->max_num_jugadores = $max_j;
    }

    public function imprime_caractersticas()
    {
        echo "Juego para: " . $this->consola;
        parent::imprime_caractersticas();
        echo "<br>" . $this->imprime_jugadores_posibles();
    }

    public function imprime_jugadores_posibles()
    {
        if ($this->min_num_jugadores == $this->max_num_jugadores) {
            if ($this->min_num_jugadores == 1) {
                echo "<br>Para un jugador";
            } else {
                echo "<br>Para " . $this->min_num_jugadores . " jugadores.";
            }
        } else {
            echo "<br>De " . $this->min_num_jugadores . " a " . $this->max_num_jugadores . " jugadores.";
        }
    }
}

/**
 * Description of class_lib
 * Método estático...
 * @author WCcorp
 */
class Foo
{
    public static $mi_static = 'foo';
    public function staticValor()
    {
        return self::$mi_static;
    }
}

class Bar extends Foo
{
    public function fooStatic()
    {
        return parent::$mi_static;
    }
}
