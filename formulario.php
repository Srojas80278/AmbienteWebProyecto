<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="include/funciones/recogeRequests.php"></script>
</head>

<main class="contenedor">
    <h1></h1>
    <div class="contendor-estetica">

        <form action="php/formulario-producto.php" method="post">
            <div>
                <label for="descripcion">Descripcion:</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion">
            </div>
            <div>
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" placeholder="Precio">
            </div>

            <button type="submit">Procesar datos</button>
        </form>

        <?php
        include("DAL/producto.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar_producto"])) {
            $idProductoEliminar = $_POST["eliminar_producto"];
            if (eliminarProducto($idProductoEliminar)) {
                echo "El producto con ID $idProductoEliminar ha sido eliminado exitosamente.";
            } else {
                echo "No se pudo eliminar el producto con ID $idProductoEliminar.";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["editar_producto"])) {
            $idProductoEditar = $_POST["editar_producto"];
            $productoEditar = obtenerProductoPorID($idProductoEditar);

            if ($productoEditar) {
                // Mostrar el formulario para editar el producto con los valores actuales
                echo "<form action='' method='post'>";
                echo "<input type='hidden' name='id_producto' value='" . $productoEditar["id_producto"] . "'>";
                echo "<div>";
                echo "<label for='descripcion'>Descripcion:</label>";
                echo "<input type='text' name='descripcion' id='descripcion' value='" . $productoEditar["descripcion"] . "' placeholder='Descripcion'>";
                echo "</div>";
                echo "<div>";
                echo "<label for='precio'>Precio:</label>";
                echo "<input type='number' name='precio' id='precio' value='" . $productoEditar["precio"] . "' placeholder='Precio'>";
                echo "</div>";
                echo "<button type='submit'>Guardar cambios</button>";
                echo "</form>";
            } else {
                echo "No se pudo obtener el producto con ID $idProductoEditar para editar.";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_producto"]) && isset($_POST["descripcion"]) && isset($_POST["precio"])) {
            $idProductoEditar = $_POST["id_producto"];
            $nuevaDescripcion = $_POST["descripcion"];
            $nuevoPrecio = $_POST["precio"];

            // Lógica para validar los datos editados si es necesario
        
            // Actualizar el producto en la base de datos
            if (actualizarProducto($idProductoEditar, $nuevaDescripcion, $nuevoPrecio)) {
                echo "El producto con ID $idProductoEditar ha sido actualizado exitosamente.";
            } else {
                echo "No se pudo actualizar el producto con ID $idProductoEditar.";
            }
        }



        readProducto();
        ?>

        <div class="container">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label><button type="submit"
                    class="btn btn-primary">Submit</button>
            </div>
        </div>

    </div>
</main>