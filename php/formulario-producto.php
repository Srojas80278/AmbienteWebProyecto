<?php

require_once '../include/funciones/recogeRequests.php';

$descripcion = recogePost("descripcion");
$precio = recogePost("precio");

// $descripcion = "asdf";
// $precio = "4";

$descripcionOk = false;
$precioOk = false;

$errores = [];

//investigar expresiones regulares en php y completar las siguientes validaciones

if ($descripcion === "") {
    $errores[] = "No se digito la descripcion del producto";
} else {
    $descripcionOk = true;
}

if ($precio === "") {
    $errores[] = "No se digito el precio del producto";
} else {
    $precioOk = true;
}

if ($descripcionOk && $precioOk) {
    //ingresar datos del 
    require_once '../DAL/producto.php';
    if (IngresaProducto($descripcion, $precio)) {
        header("Location: ../consulta-datos.php");
    }
}

?>