<?php

//? Encabezados obligatorios
header ( "Access-Control-Allow-Origin: *" );
header ( "Access-Control-Allow-Headers: access" );
header ( "Access-Control-Allow-Methods: GET" );
header ( "Access-Control-Allow-Credentials: true" );
header ( "Content-Type: application/json" );

//? Incluir archivos de conexion y objetos
include_once '../configuracion/conexion.php';
include_once '../objetos/producto.php';

//? Obtener conexion a la base de datos
$dataBase = new Conexion ();
$db       = $dataBase->getConexion ();

//? Preparar el objeto producto
$item = new Producto ( $db );

//? Set ID property of record to read
$item->id = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : die();

//? Leer los detalles del producto a editar
$item->getSingleProduct ();
if ( $item->nombre != null )
    {
    //* creacion del arreglo
    $productArr = array(
        "id"             => $item->id,
        "nombre"         => $item->nombre,
        "descripcion"    => $item->descripcion,
        "precio"         => $item->precio,
        "categoria_id"   => $item->categoria_id,
        "categoria_desc" => $item->categoria_desc,
    );
    //* asignar codigo de respuesta - 200 OK
    http_response_code ( 200 );

    //* mostrarlo en formato json
    echo json_encode ( $productArr );
    }
else
    {
    //* asignar codigo de respuesta - 404 No encontrado
    http_response_code ( 404 );

    //* informarle al usuario que no se encontraron productos
    echo json_encode ( array( "message" => "El producto no existe." ) );
    }

//* URL: http://www.wccorp.duckdns.org/code2023/PHP/DSVII-1LS231-II2023/LAB17/api/producto/leer_uno.php?id=60

?>