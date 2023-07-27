<?php

require_once 'conexion.php';

function IngresaProducto($pDescripcion, $pPrecio)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        if (mysqli_set_charset($conexion, "utf8")) {
            $stmt = $conexion->prepare("insert into productos(descripcion, precio) values (?, ?)");
            $stmt->bind_param("ss", $iDescripcion, $iPrecio);

            //set parametros y ejecutar
            $iDescripcion = $pDescripcion;
            $iPrecio = $pPrecio;

            if ($stmt->execute()) {
                $retorno = true;
            }
        }
    } catch (\Throwable $th) {
        echo $th;
        //bitacoras
    } finally {
        Desconecta($conexion);
    }

    return $retorno;
}
