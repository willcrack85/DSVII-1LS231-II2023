<?php
/**
 * Description de la clase config.php
 * Se asignarán los datos necesarios para conectarse a la base de datos.
 * @author WCcorp
 */
require_once('modelo.php');

define("urlWC", "https://willcrackcorp.w3spaces.com/");
define("space", "&nbsp;&nbsp;&nbsp;");
define("space1", "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
define("imgStatic", "fondo.gif");

class noticia extends modeloCredencialesBD
{
    protected $msjSweetAlert;

    /*/ ########** METODO CONSTRUCTOR **####### /*/
    public function __construct()
    {
        parent::__construct();
    }

    /*/ ################# METODOS GET Y SET DE CADA VARIABLE ################# /*/
    public function getSweetAlert()
    {
        return $this->msjSweetAlert;
    }

    public function setSweetAlert($string)
    {
        $this->msjSweetAlert = $string;
    }
    /*/ ################# METODOS GET Y SET DE CADA VARIABLE ################# /*/

    /*/ ########** METODO PARA LISTAR LOS DATOS DE LA TABLA **####### /*/
    public function getListarNoticias()
    {
        try {
            $MySQL = "CALL sp_listar_noticias()";
            $consulta = $this->_DB->query($MySQL);
            if ($consulta) {
                $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
                $consulta->free_result();
                $this->_DB->close();
                if ($resultado) {
                    return $resultado;
                } else {
                    //* Sin resultados de Noticias
                    $errorMessage = "No hay resultados de Noticias.";
                    $this->setSweetAlert($errorMessage);
                }
            } else {
                //* Error en la consulta
                $errorMessage = $this->_msjSweetAlert;
                $this->setSweetAlert($errorMessage);
            }
        } catch (Exception $e) {
            $errorMessage = "Ha ocurrido un error en la base de datos."; // Puedes personalizar el mensaje de error
            $this->setSweetAlert($errorMessage);
        }
    }

    /*/ ########** METODO PARA GRABAR LOS DATOS DE LA TABLA **####### /*/
    public function getBuscarNoticias($strCampo, $strValor)
    {
        try {
            $MySQL = "CALL sp_listar_noticias_filtro('" . $strCampo . "','" . $strValor . "')";
            $consulta = $this->_DB->query($MySQL);
            if ($consulta) {
                $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
                $consulta->free_result(); // Libera los recursos después de obtener los datos
                $this->_DB->close();
                if ($resultado) {
                    return $resultado;
                } else {
                    //echo ("<script>Swal.fire({title: 'Éxito', text: 'Registro no encontrado.', type: 'success'})</script>");
                    //* Sin resultados de Noticias
                    $errorMessage = "No hay resultados de Noticias.";
                    $this->setSweetAlert($errorMessage);
                }
            } else {
                //echo ("<script>Swal.fire({title: 'Error', text: 'Error en la consulta.', type: 'error'})</script>");
                //* Error en la consulta
                $errorMessage = $this->_msjSweetAlert;
                $this->setSweetAlert($errorMessage);
            }
        } catch (Exception $e) {
            $errorMessage = "Ha ocurrido un error en la base de datos."; // Puedes personalizar el mensaje de error
            $this->setSweetAlert($errorMessage);
        }
    }

    /*/ ########** METODO PARA MOSTRAR MENSAJES DE ALERTAS **####### /*/
    public function mostrarSweetAlert($mensaje)
    {
        echo "<script>
                Swal.fire({
                    text: '$mensaje',
                    icon: 'success',
                    timer: 2000
                });
              </script>";
    }
}
