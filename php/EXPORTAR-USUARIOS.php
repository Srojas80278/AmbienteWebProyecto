<?php
session_start();


require '../DAL/conexion.php';

// Función para obtener los datos de la tabla de usuarios
function obtenerDatosUsuarios()
{
    // Establecer la conexión a la base de datos
    $conexion = Conecta();

    //Solicitar todos los datos de la tabla de users y su relacion con la tabla rolesa la BD
    $sql = "SELECT u.id, u.NombreCompleto, u.Email, u.Password, r.nombre AS Rol
            FROM users u
            INNER JOIN roles r ON u.role_id = r.id";


    $resultado = mysqli_query($conexion, $sql);

    // Crear un array para almacenar los datos de la tabla
    $datosUsuarios = array();

    // Recorrer los resultados de la consulta y guardarlos en el array
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $datosUsuarios[] = $fila;
    }

    return $datosUsuarios;
}

// Obtener los datos de la tabla de usuarios
$datosUsuarios = obtenerDatosUsuarios();

// Nombre del archivo CSV
$fileName = 'reporte_usuarios.csv';

// Crear un archivo temporal
$tempFile = fopen('php://temp', 'w');

// Encabezados del archivo CSV, separados por ; para que lo haga por casillas y no todo junto
$csvData = "ID,Nombre Completo,Email,Password,Rol\r\n";

// Agregar los datos de los usuarios al archivo CSV, separados por ; para que lo haga por casillas y no todo junto
foreach ($datosUsuarios as $usuario) {
    $csvData .= $usuario['id'] . "," . $usuario['NombreCompleto'] . "," . $usuario['Email'] . "," . $usuario['Password'] . "," . $usuario['Rol'] . "\r\n";
}

// Escribir el contenido del archivo CSV en el archivo temporal
fwrite($tempFile, $csvData);

// Regresar al inicio del archivo temporal
rewind($tempFile);

// Encabezados para la descarga del archivo
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=' . $fileName);

// Leer el contenido del archivo temporal y mostrarlo en el navegador
fpassthru($tempFile);

// Cerrar y eliminar el archivo temporal
fclose($tempFile);