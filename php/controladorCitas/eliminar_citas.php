<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query(" delete from citas where id_cita=$id");
    if ($sql = TRUE) {
        echo '<div class="alert alert-success" role="alert"> ¡Cita eliminada Correctamente! </div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error al borrar</div>';
    }
}

?>