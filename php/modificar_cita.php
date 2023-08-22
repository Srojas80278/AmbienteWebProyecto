<?php
include "modeloCitas/conexionn.php";

$id = $_GET["id"];
$resultado = $conexion->query("SELECT * FROM citas WHERE id_cita=$id");

if ($resultado) {
    $datos = $resultado->fetch_object();
} else {
    echo "Error en la consulta: " . $conexion->error;
    // Puedes manejar el error de alguna manera adecuada para tu aplicación.
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Modificar la cita</title>
</head>

<body>

    <form class="col-4 m-auto" style="padding-top: 25px;" method="POST">
        <h3 class="text-center alert alert-primary">Modificacion de las citas</h3>

        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">

        <?php
        //include "modeloCitas/conexionn.php";
        include "controladorCitas/modificar_cita.php";

        if ($resultado) { // Verificar si la consulta se ejecutó correctamente
            ?>

            <!-- Estilista -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Estilista:</label>
                <input type="text" class="form-control" name="estilista" placeholder="Ingresa el nombre del estilista"
                    aria-describedby="emailHelp" value="<?= $datos->estilista ?>">
            </div>

            <!-- Fecha de la cita -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de la cita:</label>
                <input type="date" class="form-control" name="fechaCita" id="fechaCita" aria-describedby="emailHelp"
                    value="<?= $datos->fecha ?>">
            </div>

            <!-- Hora de la cita -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Hora de la cita (Ejemplo 7:00 pm):</label>
                <input type="time" class="form-control" name="horaCita" placeholder="7:00 pm, 8:00 pm, 6:00 pm"
                    aria-describedby="emailHelp" value="<?= $datos->hora ?>">
            </div>

            <!-- Sede de la cita -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sede:</label>
                <input type="text" class="form-control" name="sede" placeholder="Ingresa la sede de la cita"
                    aria-describedby="emailHelp" value="<?= $datos->sede ?>">
            </div>

            <!-- NombreCliente -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre del cliente:</label>
                <input type="text" class="form-control" name="nombreCliente" placeholder="Nombre del Cliente"
                    aria-describedby="emailHelp" minlength="3" value="<?= $datos->nombre_cliente ?>">
            </div>

            <!-- Servicio a realizar -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Servicio a realizar:</label>
                <input type="text" class="form-control" name="Servicio" placeholder="Servicio (Manicure, Color, Highlights)"
                    aria-describedby="emailHelp" value="<?= $datos->servicio ?>">
            </div>

            <!-- Correo cliente -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Electrónico:</label>
                <input type="email" class="form-control" name="correo" placeholder="Ingresa un correo electrónico"
                    aria-describedby="emailHelp" value="<?= $datos->descripcion_servicio ?>">
            </div>
            <?php

        } else {
            echo "No se encontraron datos para mostrar.";
        }
        ?>
        <div class="text-center">
            <button type="submit" class="btn btn-primary mx-auto" name="btnregistrar" value="ok">Registrar Cita</button>
        </div>
    </form>
</body>

</html>