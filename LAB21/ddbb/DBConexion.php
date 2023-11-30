<?php

class DBConexion
    {
    // Create the data conexion.
    public static function connection ()
        {
        $connection = new mysqli ( "mysql.wccorp.duckdns.org", "willcrackcorp", "g/ZlgxgTp50VNjNR", "prodsmvc" );

        if ( $connection->errno )
            {
            echo "Failed to connect to MySQL: " . mysqli_connect_error ();
            }
        else
            {
            $connection->query ( "SET NAMES 'utf8'" );
            return $connection;
            }
        }
    }

?>