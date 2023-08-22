<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

require '../../DAL/conexion.php';

$idUsuario = $_SESSION['id'];
$conexion = Conecta();

// Query
$sql = "SELECT carrito.id_producto, carrito.cantidad, productos.nombre, productos.precio AS precioProducto
        FROM carrito
        INNER JOIN productos ON carrito.id_producto = productos.id_producto
        WHERE userId = $idUsuario";
$resultado = mysqli_query($conexion, $sql);

// Info del User
$sqlUsuario = "SELECT NombreCompleto, email FROM users WHERE id = $idUsuario";
$resultadoUsuario = mysqli_query($conexion, $sqlUsuario);
$usuario = mysqli_fetch_assoc($resultadoUsuario);

// Factura
$facturaHTML = '<html>
<head>
    <link rel="stylesheet" href="../../css/generarFactura.css">
    <title>Factura de Compra - Utopía Beauty Salón</title>
</head>
<body>
    <div class="header">
        <div class="titulo">Utopía Beauty Salón</div>
        <div class="subtitulo">Factura de Compra</div>
        <div class="mensaje">Gracias por elegir nuestros productos ecológicos.</div>
    </div>
    <div class="info-usuario">
        <p><strong>Nombre:</strong> ' . $usuario['NombreCompleto'] . '</p>
        <p><strong>Email:</strong> ' . $usuario['email'] . '</p>
    </div>
    <table class="tabla-factura">
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
        </tr>';

$total = 0;

while ($fila = mysqli_fetch_assoc($resultado)) {
    $subtotal = $fila['precioProducto'] * $fila['cantidad'];
    $total += $subtotal;
    
    $facturaHTML .= '<tr>';
    $facturaHTML .= '<td>' . $fila['nombre'] . '</td>';
    $facturaHTML .= '<td>' . $fila['cantidad'] . '</td>';
    $facturaHTML .= '<td>$' . $fila['precioProducto'] . '</td>';
    $facturaHTML .= '<td>$' . $subtotal . '</td>';
    $facturaHTML .= '</tr>';
}

$facturaHTML .= '</table>
    <p class="total"><strong>Total: $' . $total . '</strong></p>
    <button onclick="window.print()">Imprimir</button>
    <a href="../../principal.php"><button>Volver al inicio</button></a>
</body>
</html>';

// Limpiar Carrito
$sqlEliminar = "DELETE FROM carrito WHERE userId = $idUsuario";
mysqli_query($conexion, $sqlEliminar);

// Mostrar la factura generada
echo $facturaHTML;
?>
