<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['id'])) {
        header("Location: login.php");
        exit;
    }

    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    require '../../DAL/conexion.php';

    $idUsuario = $_SESSION['id'];
    $conexion = Conecta();

    $query = "SELECT id_producto, precio FROM productos WHERE id_producto = $productId";
    $result = mysqli_query($conexion, $query);
    $productData = mysqli_fetch_assoc($result);

    if ($productData) {
        $precio = $price;
        $subtotal = $price * $quantity;

        $insertQuery = "INSERT INTO carrito (userId, id_producto, cantidad, precio, subtotal) VALUES ($idUsuario, $productId, $quantity, $precio, $subtotal)";
        mysqli_query($conexion, $insertQuery);

        header("Location: ../../carrito.php");
        exit;
    }
}
?>