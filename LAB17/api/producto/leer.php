<?php

//? Encabezados Obligatorios
header ( "Access-Control-Allow-Origin: *" );
header ( "Content-Type: application/json; charset=UTF-8" );
//WC **************************************************************/ 
//? Incluir Archivos de Conexion y Objetos
include_once '../configuracion/conexion.php';
include_once '../objetos/producto.php';

//? Inicializar Base de Datos y Objeto Producto
$dataBase = new Conexion ();
$db       = $dataBase->getConexion ();

//? inicializar objeto
$items = new Producto ( $db );
//WC **************************************************************/ 
//? QUERY Productos
$stmt      = $items->getProduct ();
$itemCount = $stmt->rowCount ();

//? Verificar si hay mas de 0 Registros Encontrados
if ( $itemCount > 0 )
    {
    //? Arreglo de Productos
    $productsArr              = array();
    $productsArr[ "records" ] = array();
    //* obtiene todo el contenido de la tabla
    //* fetch() es mas rapido que fetchAll()
    while ( $row = $stmt->fetch ( PDO::FETCH_ASSOC ) )
        {
        //* extraer fila
        //* esto creara de $row['nombre'] a
        //* solamente $nombre
        extract ( $row );
        $productItem = array(
            "id"             => $id,
            "nombre"         => $nombre,
            "descripcion"    => html_entity_decode ( $descripcion ),
            "precio"         => $precio,
            "categoria_id"   => $categoria_id,
            "categoria_desc" => $categoria_desc,
        );
        array_push ( $productsArr[ "records" ], $productItem );
        }

    //? asignar codigo de respuesta - 200 OK
    http_response_code ( 200 );

    //? mostrar productos en formato json
    echo json_encode ( $productsArr );
    }
//WC **************************************************************/ 
else
    {
    //? asignar codigo de respuesta - 404 No encontrado
    http_response_code ( 404 );

    //? informarle al usuario que no se encontraron productos
    echo json_encode ( array( "message" => "No se encontraron productos." ) );
    }

//* URL: http://www.wccorp.duckdns.org/code2023/PHP/DSVII-1LS231-II2023/LAB17/api/producto/leer.php

?>