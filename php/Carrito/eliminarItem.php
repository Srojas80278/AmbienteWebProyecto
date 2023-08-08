<?php
require '../../DAL/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cartItemId = $_POST['cart_item_id'];

    $conexion = Conecta();

    $deleteQuery = "DELETE FROM carrito WHERE id = $cartItemId";
    mysqli_query($conexion, $deleteQuery);

    header("Location: ../../carrito.php");
    exit;
}
?>