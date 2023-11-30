<?php
/**
 * Description de la clase usuarios.php
 * Laboratorio 14.1: log-in de acceso (iniciar sesión) [Carpeta class].
 * @author WCcorp
 */
require_once( 'modelo.php' );
class usuarios extends modeloCredencialesBD
    {
    protected $msjSweetAlert;

    /*/ ########** METODO CONSTRUCTOR **####### /*/
    public function __construct ()
        {
        //// Llamando al constructor de la clase padre.
        //// clase Padre modeloCredencialesDB.
        parent::__construct ();
        }

    /*/ ################# METODOS GET Y SET DE CADA VARIABLE ################# /*/
    public function getSweetAlert ()
        {
        return $this->msjSweetAlert;
        }

    public function setSweetAlert ( $string )
        {
        $this->msjSweetAlert = $string;
        }
    /*/ ################# METODOS GET Y SET DE CADA VARIABLE ################# /*/

    /*/ ###########** METODO PARA VALIDAR UN USUARIO EN LA TABLA **########### /*/
    public function getValidarUsuario ( $usr, $pwd )
        {
        try
            {
            $MySQL    = "CALL sp_validar_usuario('" . $usr . "','" . $pwd . "')";
            $consulta = $this->_DB->query ( $MySQL );
            if ( $consulta->num_rows > 0 )
                {
                $resultado = $consulta->fetch_all ( MYSQLI_ASSOC );
                $consulta->free_result ();
                $this->_DB->close ();
                if ( $resultado )
                    {
                    return $resultado;
                    }
                else
                    {
                    $errorMessage = "Usuario o contraseña incorrectos.";
                    $this->setSweetAlert ( $errorMessage );
                    }
                }
            else
                {
                //* Error en la consulta
                $errorMessage = $this->_msjSweetAlert;
                $this->setSweetAlert ( $errorMessage );
                }
            }
        catch ( Exception $e )
            {
            $errorMessage = "Ha ocurrido un error en la base de datos.";
            $this->setSweetAlert ( $errorMessage );

            }
        }
    /*/ ###########** METODO PARA VALIDAR UN USUARIO EN LA TABLA **########### /*/

    /*/ ############** METODO PARA GRABAR UN USUARIO EN LA TABLA **########### /*/
    public function getGrabarUsuario ( $user, $pass )
        {
        try
            {
            $stmt = $this->_DB->prepare ( "CALL sp_grabar_usuario(?, ?)" );
            $stmt->bind_param ( "ss", $user, $pass );
            $stmt->execute ();
            
            // Puedes hacer algo con el resultado si es necesario
            $result = $stmt->get_result ();
            $stmt->close ();
            $this->_DB->close ();
            if ( $result )
                {
                return true; // Devolver true si la ejecución fue exitosa
                }
            else
                {
                $errorMessage = "Usuario o contraseña con error al grabar.";
                $this->setSweetAlert ( $errorMessage );
                }
            }
        catch ( Exception $e )
            {
            // Manejar la excepción (por ejemplo, log, enviar correo electrónico, etc.)
            // Puedes devolver false o lanzar la excepción según tus necesidades
            return false;
            }
        }
    /*/ ############** METODO PARA GRABAR UN USUARIO EN LA TABLA **########### /*/
    }