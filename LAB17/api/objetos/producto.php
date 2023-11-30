<?php

class Producto
    {
    //? Conexion de Base de Datos y Tabla Productos
    private $conn;
    private $nombre_tabla = "productos";

    //? Atributos de la Clase
    public $id;
    public $nombre;
    public $descripcion;
    public $precio;
    public $categoria_id;
    public $categoria_desc;
    public $creado;

    //? Constructor con $db como Conexion a Base de Datos
    public function __construct ( $db )
        {
        $this->conn = $db;
        }

    //? Leer Productos
    function getProduct ()
        {
        //* query para seleccionar todos
        $sqlQuery = "SELECT c.nombre AS categoria_desc, p.id, p.nombre, p.descripcion, p.precio, p.categoria_id, p.creado FROM " . $this->nombre_tabla . " p LEFT JOIN categorias c ON p.categoria_id = c.id ORDER BY p.creado DESC";

        //* sentencia para preparar query
        $stmt = $this->conn->prepare ( $sqlQuery );

        //* ejecutar query
        $stmt->execute ();
        return $stmt;
        }

    //? Crear Producto
    function getCreateProduct ()
        {
        //* query para insertar un registro
        $sqlQuery = "INSERT INTO " . $this->nombre_tabla . " SET nombre = :nombre, descripcion = :descripcion, precio = :precio, categoria_id = :categoria_id, creado = :creado";

        //* Preparar el Query
        $stmt = $this->conn->prepare ( $sqlQuery );

        //* sanitize
        $this->nombre       = htmlspecialchars ( strip_tags ( $this->nombre ) );
        $this->descripcion  = htmlspecialchars ( strip_tags ( $this->descripcion ) );
        $this->precio       = htmlspecialchars ( strip_tags ( $this->precio ) );
        $this->categoria_id = htmlspecialchars ( strip_tags ( $this->categoria_id ) );
        $this->creado       = htmlspecialchars ( strip_tags ( $this->creado ) );

        //* bind values
        $stmt->bindParam ( ":nombre", $this->nombre );
        $stmt->bindParam ( ":descripcion", $this->descripcion );
        $stmt->bindParam ( ":precio", $this->precio );
        $stmt->bindParam ( ":categoria_id", $this->categoria_id );
        $stmt->bindParam ( ":creado", $this->creado );

        //* Execute Query
        if ( $stmt->execute () )
            {
            return true;
            }
        return false;
        }

    //? utilizado al completar el formulario de actualización del producto
    function getSingleProduct ()
        {
        //* Consulta para leer un solo registro
        $sqlQuery = "SELECT c.nombre AS categoria_desc, p.id, p.nombre, p.descripcion, p.precio, p.categoria_id, p.creado FROM " . $this->nombre_tabla . " p LEFT JOIN categorias c ON p.categoria_id = c.id WHERE p.id = ? LIMIT 0,1";

        //* Preparar declaración de consulta
        $stmt = $this->conn->prepare ( $sqlQuery );

        //* ID de enlace del producto a actualizar
        $stmt->bindParam ( 1, $this->id );

        //* Ejecutar consulta
        $stmt->execute ();

        //* Obtener fila recuperada
        $dataRow = $stmt->fetch ( PDO::FETCH_ASSOC );

        //* Establecer valores a las propiedades del objeto
        if ( is_array ( ( $dataRow ) ) )
            {
            $this->nombre         = $dataRow[ 'nombre' ];
            $this->precio         = $dataRow[ 'precio' ];
            $this->descripcion    = $dataRow[ 'descripcion' ];
            $this->categoria_id   = $dataRow[ 'categoria_id' ];
            $this->categoria_desc = $dataRow[ 'categoria_desc' ];
            }
        }

    //? Utilizado al completar el formulario para ACTUALIZAR EL REGISTRO de un producto.
    function getUpdateProduct ()
        {
        //* Consulta para leer un solo registro
        $sqlQuery = "UPDATE " . $this->nombre_tabla . " SET nombre = :nombre, descripcion = :descripcion, precio = :precio, categoria_id = :categoria_id WHERE id = :id";

        //* Preparar declaración de consulta
        $stmt = $this->conn->prepare ( $sqlQuery );

        $this->nombre       = htmlspecialchars ( strip_tags ( $this->nombre ) );
        $this->descripcion  = htmlspecialchars ( strip_tags ( $this->descripcion ) );
        $this->precio       = htmlspecialchars ( strip_tags ( $this->precio ) );
        $this->categoria_id = htmlspecialchars ( strip_tags ( $this->categoria_id ) );
        $this->id           = htmlspecialchars ( strip_tags ( $this->id ) );

        //* Bind Values Data
        $stmt->bindParam ( ":nombre", $this->nombre );
        $stmt->bindParam ( ":descripcion", $this->descripcion );
        $stmt->bindParam ( ":precio", $this->precio );
        $stmt->bindParam ( ":categoria_id", $this->categoria_id );
        //* ID de enlace del producto a actualizar
        $stmt->bindParam ( ":id", $this->id );

        //* Execute Query
        if ( $stmt->execute () )
            {
            return true;
            }
        return false;
        }

    //? Utilizado al completar el formulario para ELIMINAR EL REGISTRO de un producto.
    function getDeleteProduct ()
        {
        //* Consulta para eliminar un solo registro
        $sqlQuery = "DELETE FROM " . $this->nombre_tabla . " WHERE id = :id";

        //* Preparar declaración de consulta
        $stmt = $this->conn->prepare ( $sqlQuery );

        $this->id = htmlspecialchars ( strip_tags ( $this->id ) );

        //* ID de enlace del producto a ELIMINAR
        $stmt->bindParam ( ":id", $this->id );

        //* Execute Query
        if ( $stmt->execute () )
            {
            return true;
            }
        return false;
        }
    }

?>