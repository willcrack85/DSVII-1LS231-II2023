<?php

/**
 * Description de la clase config.php
 * Se asignarán los datos necesarios para conectarse a la base de datos.
 * @author WCcorp
 */
require_once('config.php');
class modeloCredencialesBD
{
    protected $_DB;
    protected $_msjSweetAlert;
    
    public function __construct()
    {
        try {
            $this->_DB = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        } catch (mysqli_sql_exception $e) {
            $this->_msjSweetAlert = $e->getMessage();
        }
    }
}
