<?php

/**
 * Description of votos
 * Objetivo: Desarrollar aplicaciones web en PHP con acceso a base de datos
 * MySQL (MariaDB).
 * @author WCcorp
 */
require_once('modelo.php');

class votos extends modeloCredencialesBD
{
    protected $msjSweetAlert;

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

    /*/ ########** METODO CONSTRUCTOR **####### /*/
    public function __construct()
    {
        parent::__construct();
    }
    /*/ ########** METODO CONSTRUCTOR **####### /*/

    public function listar_votos()
    {
        try {
            $MySQL = "CALL sp_listar_votos()";
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
            $errorMessage = "Ha ocurrido un error en la base de datos.";
            $this->setSweetAlert($errorMessage);
        }
    }

    public function actualizar_votos($voto1, $voto2)
    {
        try {
            $MySQL = "CALL sp_actualizar_votos('" . $voto1 . "','" . $voto2 . "')";
            $actualizar = $this->_DB->query($MySQL);
            if ($actualizar) {
                return $actualizar;
                $actualizar->close();
                $this->_DB->close();
            } else {
                //* Error en la consulta
                $errorMessage = $this->_msjSweetAlert;
                $this->setSweetAlert($errorMessage);
            }
        } catch (Exception $e) {
            $errorMessage = "Ha ocurrido un error en la base de datos.";
            $this->setSweetAlert($errorMessage);
        }
    }
}
