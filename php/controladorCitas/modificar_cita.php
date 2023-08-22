<?php

if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST["estilista"]) && !empty($_POST["fechaCita"]) && !empty($_POST["horaCita"]) &&
        !empty($_POST["sede"]) && !empty($_POST["nombreCliente"]) && !empty($_POST["Servicio"]) &&
        !empty($_POST["correo"])
    ) {

        // Ingresamos los datos del formulario en variables
        $estilista = $_POST["estilista"];
        $fecha = $_POST["fechaCita"];
        $hora = $_POST["horaCita"];
        $sede = $_POST["sede"];
        $nombre_cliente = $_POST["nombreCliente"];
        $servicio = $_POST["Servicio"];
        $descripcion_servicio = $_POST["correo"];

        // ID de la cita a actualizar
        $id_cita = $_POST["id"];

        // Realizar la actualización en la base de datos
        $sql = "UPDATE Citas SET 
                    estilista = '$estilista',
                    fecha = '$fecha',
                    hora = '$hora',
                    sede = '$sede',
                    nombre_cliente = '$nombre_cliente',
                    servicio = '$servicio',
                    descripcion_servicio = '$descripcion_servicio'
                WHERE id_cita = $id_cita";

        if ($conexion->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Actualización exitosa (Redireccionando a Página Principal......) </div>';
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "index.php"; // Cambia "pagina_principal.php" por la URL de tu página principal
                    }, 5000); // Redirige después de 5 segundos
                  </script>';        
        } else {
            echo '<div class="alert alert-danger" role="alert">Error al actualizar</div>';
        }

    } else {
        echo '<div class="alert alert-warning" role="alert">Revisa que todos los campos estén llenos</div>';
    }
}



?>