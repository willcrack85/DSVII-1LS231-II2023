<?php

class Conexion
    {
    //? especificar las credenciales de base de datos
    private $host = "mysql.wccorp.duckdns.org";    //WC   localhost | dgi-p1inf31.mef.gob.pa | wccorp.duckdns.org
    private $db_name = "productos_api";            //WC   Nombre de la Base de Datos
    private $username = "willcrackcorp";           //WC   Usuarios de la Base de Datos
    private $password = "g/ZlgxgTp50VNjNR";        //WC   Contraseña de las Tablas en DB
    public $conn;

    //? obtener la conexion de la base de datos
    public function getConexion ()
        {
        $this->conn = null;
        try
            {
            $this->conn = new PDO ( "mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password );
            $this->conn->exec ( "set names utf8" );
            }
        catch ( PDOException $e )
            {
            echo "Error de conexion a base de datos: " . $e->getMessage ();
            }
        return $this->conn;
        }
    }

?>