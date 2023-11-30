<?php

//? Encabezados Obligatorios
header ( "Access-Control-Allow-Origin: *" );
header ( "Content-Type: application/json; charset=UTF-8" );
header ( "Access-Control-Allow-Methods: POST" );
header ( "Access-Control-Max-Age: 3600" );
header ( "Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With" );

//? obtener conexion de base de datos
include_once '../configuracion/conexion.php';

//? instanciar el objeto producto
include_once '../objetos/producto.php';

$dataBase = new Conexion ();
$db       = $dataBase->getConexion ();

$item = new Producto ( $db );

//? Obtener los Datos
$data = json_decode ( file_get_contents ( "php://input" ) );

//? Asegurar que los datos no esten vacios
if ( ! empty( $data->nombre ) && ! empty( $data->descripcion ) && ! empty( $data->precio ) && ! empty( $data->categoria_id ) )
    {
    //* Asignar valores de propiedad a producto
    $item->nombre       = $data->nombre;
    $item->precio       = $data->precio;
    $item->descripcion  = $data->descripcion;
    $item->categoria_id = $data->categoria_id;
    $item->creado       = date ( 'Y-m-d H:i:s' );

    //* Crear el item
    if ( $item->getCreateProduct () )
        {
        //* Asignar codigo de respuesta - 201 creado
        http_response_code ( 201 );
        //* Informar al usuario
        echo json_encode ( array( "message" => "El producto ha sido creado." ) );
        }
    //* Si no puede crear el producto, informar al usuario
    else
        {
        //* Asignar codigo de respuesta - 503 servicio no disponible
        http_response_code ( 503 );
        //* Informar al usuario
        echo json_encode ( array( "message" => "No se puede crear el producto." ) );
        }
    }
//* Informar al usuario que los datos estan incompletos
else
    {
    //* Asignar codigo de respuesta - 400 solicitud incorrecta
    http_response_code ( 400 );
    //* Informar al usuario
    echo json_encode ( array( "message" => "No se puede crear el producto. Los datos están incompletos." ) );
    }

//* URL: http://www.wccorp.duckdns.org/code2023/PHP/DSVII-1LS231-II2023/LAB17/api/producto/crear.php

?>