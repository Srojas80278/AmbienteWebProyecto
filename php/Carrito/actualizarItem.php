<?php
require '../../DAL/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cartItemId = $_POST['cart_item_id'];
    $newQuantity = $_POST['new_quantity'];
    $price = $_POST['price'];
    $subtotal = $newQuantity * $price;

    $conexion = Conecta();

    $updateQuery = "UPDATE carrito SET cantidad = $newQuantity, precio = $price, subtotal = $subtotal WHERE id = $cartItemId";
    mysqli_query($conexion, $updateQuery);

    header("Location: ../../carrito.php");
    exit;
}
?>