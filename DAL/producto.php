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


function readProducto()
{
    $retorno = false;
    try {
        $conexion = Conecta();

        //formato de datos UTF-8
        $stmt = "SELECT * FROM productos";
        $result = mysqli_query($conexion, $stmt);
        if (!mysqli_error($conexion)) {
            echo "conexion realizada";
        }

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br>";
            echo "Id: " . $row["id_producto"] . "<br>";
            echo "Descripcion: " . $row["descripcion"] . "<br>";
            echo "Precio: " . $row["precio"] . "<br>";

            // Botón para eliminar el producto
            echo "<form action='' method='post'>";
            echo "<input type='hidden' name='eliminar_producto' value='" . $row["id_producto"] . "'>";
            echo "<button type='submit'>Eliminar</button>";
            echo "</form>";

            // Botón para editar el producto
            echo "<form action='' method='post'>";
            echo "<input type='hidden' name='editar_producto' value='" . $row["id_producto"] . "'>";
            echo "<button type='submit'>Editar</button>";
            echo "</form>";
        }

    } catch (\Throwable $th) {
        echo $th;
    } finally {
        Desconecta($conexion);
    }

    return $stmt;
}


function eliminarProducto($idProducto)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        // Consulta SQL para eliminar el producto por su ID
        $stmt = $conexion->prepare("DELETE FROM productos WHERE id_producto = ?");
        $stmt->bind_param("i", $idProducto);

        if ($stmt->execute()) {
            $retorno = true;
        }
    } catch (\Throwable $th) {
        echo $th;
        // Manejo de errores o bitácoras
    } finally {
        Desconecta($conexion);
    }

    return $retorno;
}

function obtenerProductoPorID($idProducto)
{
    $producto = null;
    try {
        $conexion = Conecta();

        // Consulta SQL para obtener el producto por su ID
        $stmt = $conexion->prepare("SELECT * FROM productos WHERE id_producto = ?");
        $stmt->bind_param("i", $idProducto);

        if ($stmt->execute()) {
            $resultado = $stmt->get_result();
            $producto = $resultado->fetch_assoc();
        }
    } catch (\Throwable $th) {
        echo $th;
        // Manejo de errores o bitácoras
    } finally {
        Desconecta($conexion);
    }

    return $producto;
}

function actualizarProducto($idProducto, $nuevaDescripcion, $nuevoPrecio)
{
    $retorno = false;
    try {
        $conexion = Conecta();

        // Consulta SQL para actualizar el producto por su ID
        $stmt = $conexion->prepare("UPDATE productos SET descripcion = ?, precio = ? WHERE id_producto = ?");
        // El tipo de dato para el precio debe ser "d" (double)
        $stmt->bind_param("sdi", $nuevaDescripcion, $nuevoPrecio, $idProducto);

        if ($stmt->execute()) {
            $retorno = true;
        }
    } catch (\Throwable $th) {
        echo $th;
        // Manejo de errores o bitácoras
    } finally {
        Desconecta($conexion);
    }

    return $retorno;
}