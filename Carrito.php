<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/shoppingCart.css">
    <title>Carrito de Compras 🛒</title>
</head>

<body>
    <?php include 'include/templates/header.php'; ?>

    <div class="containerCart">
        <style>
            h1 {
                padding-top: 2rem;
            }
        </style>
        <h1>Carrito de Compras</h1>
        <div class="cart-items">
            <?php
            if (!isset($_SESSION['id'])) {
                header("Location: login.php");
                exit;
            }
            require 'DAL/conexion.php';

            $idUsuario = $_SESSION['id'];
            $conexion = Conecta();
            $sql = "SELECT carrito.id, carrito.id_producto, carrito.cantidad, carrito.precio, productos.nombre, productos.descripcion, productos.img, productos.precio AS precioProducto
            FROM carrito
            INNER JOIN productos ON carrito.id_producto = productos.id_producto
            WHERE userId = $idUsuario";
            $resultado = mysqli_query($conexion, $sql);

            $total = 0;

            if (mysqli_num_rows($resultado) > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo '<div class="cart-item">';
                    echo '<img src="' . $fila['img'] . '" alt="' . $fila['nombre'] . '" />';
                    echo '<div class="cart-item-details">';
                    echo '<h2 class="cart-item-title">' . $fila['nombre'] . '</h2>';
                    echo '<p class="cart-item-description">' . $fila['descripcion'] . '</p>';
                    echo '<p class="cart-item-quantity">Cantidad: ' . $fila['cantidad'] . '</p>';
                    echo '<p class="cart-item-price">Precio: $' . $fila['precioProducto'] . '</p>';

                    // Subtotal
                    $subtotal = $fila['precioProducto'] * $fila['cantidad'];
                    echo '<p class="cart-item-subtotal">Subtotal: $' . $subtotal . '</p>';

                    // BTN Modificar
                    echo '<form action="php/Carrito/actualizarItem.php" method="post">';
                    echo '<input type="hidden" name="cart_item_id" value="' . $fila['id'] . '" />';
                    echo '<input type="number" name="new_quantity" value="' . $fila['cantidad'] . '" />';
                    echo '<input type="hidden" name="price" value="' . $fila['precio'] . '" />';
                    echo '<button type="submit">Modificar Cantidad</button>';
                    echo '</form>';

                    // BTN Eliminar
                    echo '<form action="php/Carrito/eliminarItem.php" method="post">';
                    echo '<input type="hidden" name="cart_item_id" value="' . $fila['id'] . '" />';
                    echo '<button type="submit">Eliminar</button>';
                    echo '</form>';

                    echo '</div>';
                    echo '</div>';

                    $total += $subtotal;
                }
            }
            ?>
        </div>

        <p class="cart-total">Total: $
            <?php echo number_format($total, 2); ?>
        </p>

        <div class="buttonsCart">
            <a href="#">Seguir comprando</a>
            <a href="#">Comprar</a>
        </div>
    </div>

    <?php include 'include/templates/footer.php'; ?>