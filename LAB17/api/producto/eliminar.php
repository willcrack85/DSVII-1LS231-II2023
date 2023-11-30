<?php

//? Encabezados obligatorios
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//? Incluir archivos de conexion y objetos
include_once '../configuracion/conexion.php';
include_once '../objetos/producto.php';

//? Obtener conexion a la base de datos
$dataBase = new Conexion();
$db = $dataBase->getConexion();

//? Preparar el objeto producto
$item = new Producto($db);

//? Set ID property of record to read
$data = json_decode(file_get_contents("php://input"));
if (!empty($data->id)) {

    $item->id = $data->id;

    //? Leer los detalles del producto a editar
    if ($item->getDeleteProduct()) {
        //* Asignar codigo de respuesta - 200 OK
        http_response_code(200);

        //* Mostrarlo en formato json
        echo json_encode(array("message" => "El producto se ha eliminado."));
    } else {
        //* Asignar codigo de respuesta - 503 servicio no disponible
        http_response_code(503);
        
        //* Informar al usuario
        echo json_encode(array("message" => "No se puede actualizar el producto."));
    }
} else {
    //* Asignar codigo de respuesta - 400 solicitud incorrecta
    http_response_code(400);
    //* Informar al usuario
    echo json_encode(array("message" => "No se puede actualizar el producto. Los datos están incompletos."));
    #echo ("Cambios guardados. Filas actualizadas: {$sentencia->rowCount()}");
}

//* URL: http://www.wccorp.duckdns.org/code2023/PHP/DSVII-1LS231-II2023/LAB17/api/producto/eliminar.php

?>