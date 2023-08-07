<?php
session_start();

require '../DAL/conexion.php';

// Verificar si se recibió el ID del usuario a eliminar a través de la URL
if (isset($_GET['id'])) {
    // Obtener el ID del usuario desde la URL
    $idUsuario = $_GET['id'];

    // Establecer la conexión a la base de datos
    $conexion = Conecta();

    // Consulta la BD para eliminar el usuario por su ID
    $sql = "DELETE FROM users
            WHERE id = $idUsuario";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si se realizó la eliminación correctamente, y en caso de algun error notificar, y si es error de la BD que indique de que tipo

    if ($resultado) {
        echo "¡Usuario eliminado correctamente!";
        header("Location: ../MOSTRAR-USUARIOS.php");
        exit;
    } else {
        echo "Error al eliminar el usuario";
        if (!$resultado) {
            echo "Error en la consulta: " . mysqli_error($conexion);
        }
    }
} else {
    // Si no se recibió el ID del usuario, redirigir a la página de los usuarios
    header("Location: ../MOSTRAR-USUARIOS.php");
    exit;
}
?>