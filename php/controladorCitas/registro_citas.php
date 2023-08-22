<?php


if (!empty($_POST["btnregistrar"])) {
    if (
        !empty($_POST["estilista"]) && !empty($_POST["fechaCita"]) && !empty($_POST["horaCita"]) &&
        !empty($_POST["sede"]) && !empty($_POST["nombreCliente"]) &&  !empty($_POST["Servicio"]) &&
        !empty($_POST["correo"])){ 
        
        //Ingresamos lo del formulario a una variables

        $estilista = $_POST["estilista"];
        $fecha = $_POST["fechaCita"]; 
        $hora = $_POST["horaCita"];
        $sede = $_POST["sede"];
        $nombre_cliente = $_POST["nombreCliente"];
        $servicio = $_POST["Servicio"];
        $descripcion_servicio = $_POST["correo"];

        //Esas variables se ingresan en las vatiables de la tabla de MySQL
        // Realizar la inserción en la base de datos
        $sql = "INSERT INTO Citas (estilista, fecha, hora, sede, nombre_cliente, servicio, descripcion_servicio) 
                VALUES ('$estilista', '$fecha', '$hora', '$sede', '$nombre_cliente', '$servicio', '$descripcion_servicio')";
        
        if ($conexion->query($sql) === TRUE) {
            echo '<div class="alert alert-success" role="alert">Registro exitoso</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error al registrar</div>';
        }
         
    } else {
        echo '<div class="alert alert-warning" role="alert">Revisa que todos los campos estén llenos</div>';
    }
}
?>
