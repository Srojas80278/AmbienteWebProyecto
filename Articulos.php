<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
</head>

<body>
    <?php include 'include/templates/header.php'; ?>

    <div class="container">
        <h1>Articulos</h1>

        <?php
        require 'DAL/conexion.php';

        $conexion = Conecta();
        $query = "SELECT id_producto, nombre, descripcion, img, precio FROM productos";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($fila = mysqli_fetch_assoc($result)) {
                echo '<div class="producto-details">';
                echo '<img src="' . $fila['img'] . '" alt="' . $fila['nombre'] . '">';
                echo '<h2>' . $fila['nombre'] . '</h2>';
                echo '<p>' . $fila['descripcion'] . '</p>';
                echo '<p>Precio: $' . $fila['precio'] . '</p>';

                echo '<form action="php/Carrito/agregarItem.php" method="post">';
                echo '<input type="hidden" name="product_id" value="' . $fila['id_producto'] . '">';
                echo '<input type="number" name="quantity" value="1">';
                echo '<input type="hidden" name="price" value="' . $fila['precio'] . '">';
                echo '<button type="submit">Agregar al Carrito</button>';
                echo '</form>';

                echo '</div>';
            }
        } else {
            echo '<p>Compra tu primer producto en la tienda.</p>';
        }
        ?>
    </div>

    <?php include 'include/templates/footer.php'; ?>
</body>

</html>