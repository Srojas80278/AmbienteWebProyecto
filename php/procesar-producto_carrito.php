<?php

require_once '../include/funciones/recogeRequests.php';

$descripcion = recogePost("descripcion");
$precio = recogePost("precio");


$descripcionOk = false;
$precioOk = false;

$errores = [];

//investigar expresiones regulares en php y completar las siguientes validaciones

if($descripcion === ""){
    $errores[] = "No se digito la descripcion";
}else{
    $descripcionOk = true;
}

if($precio === ""){
    $errores[] = "No se digito el precio de la persona";
}else{
    $precioOk = true;
}


if($descripcionOk && $precioOk){

    require_once '../DAL/producto.php';
    if(IngresaProducto($descripcion, $precio)){
    //    header("Location: ../consulta-datos.php");
    header("Location: ../Principal.php");
    }
}

?>