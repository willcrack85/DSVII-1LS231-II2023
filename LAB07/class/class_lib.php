<?php

/**
 * Description of class_lib
 * Creacion y uso de constantes en una clase.
 * @author WCcorp
 */
class MiClase
{
    const constante = 'vaalor constante';
    function mostrarConstante()
    {
        echo "<br>" . self::constante . "<br><br>";
    }
}

/**
 * Description of class_lib
 * Abstraccion de objeto.
 * @author WCcorp
 */
abstract class ClaseAbstracta
{
    //Se fuerza la herencia de la clase para definir estos métodos.
    abstract protected function tomarValor();
    abstract protected function prefixValor($prefix);
    //Método común.
    public function printOut()
    {
        print $this->tomarValor() . "<br>";
    }
}

class ClaseConcreta1 extends ClaseAbstracta
{
    protected function tomarValor()
    {
        return "ClaseConcreta1";
    }

    public function prefixValor($prefix)
    {
        return "{$prefix}ClaseConcreta1";
    }
}

class ClaseConcreta2 extends ClaseAbstracta
{
    protected function tomarValor()
    {
        return "ClaseConcreta2";
    }

    public function prefixValor($prefix)
    {
        return "{$prefix}ClaseConcreta2";
    }
}

/**
 * Description of class_lib
 * Interface.
 * @author WCcorp
 */
interface iTemplate
{
    public function ponerVariable($nombre, $var);
    public function verHtml($template);
}

class Template implements iTemplate
{
    private $vars = array();
    public function ponerVariable($nombre, $var)
    {
        $this->vars[$nombre] = $var;
    }

    public function verHtml($template)
    {
        foreach ($this->vars as $nombre => $value) {
            $template = str_replace($nombre, $value, $template);
        }
        return $template;
    }
}

/**
 * Description of class_lib
 * Clonación de objeto.
 * @author WCcorp
 */
class SubObject
{
    static $instnces = 0;
    public $instance;

    public function __construct()
    {
        $this->instance = ++self::$instnces;
    }

    public function __clone()
    {
        $this->instance = ++self::$instnces;
    }
}

class MyCloneable
{
    public $object1;
    public $object2;

    function __clone()
    {
        //Forzar una copia de this->object
        $this->object1 = clone $this->object1;
    }
}

/**
 * Description of class_lib
 * Uso de formularios en orientaci[on a objetos I.
 * @author WCcorp
 */
class Cilindro
{
    protected $fPI;
    protected $fDiametro;
    protected $fAltura;
    protected $fRadio;

    function __construct($dist, $alto)
    {
        $this->fDiametro = $dist;
        $this->fAltura = $alto;
        $this->fPI = 3.141593;
        $this->fRadio = $dist / 2;
    }

    function obtener_radio()
    {
        return $this->fRadio;
    }

    function calc_volumen()
    {
        return $this->fPI * $this->fRadio * $this->fRadio * $this->fAltura;
    }

    function calc_area()
    {
        return 2 * $this->fPI * $this->fRadio * ($this->fRadio + $this->fAltura);
    }
}
