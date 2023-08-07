<?php
session_start();


require '../DAL/conexion.php';


if (isset($_POST['ActualizarUsuario'])) {
    // Obtener el ID del usuario desde el formulario
    $idUsuario = $_POST['idUsuario'];

    // Establecer la conexión a la base de datos
    $conexion = Conecta();


    // Obtener los datos del formulario existentes
    $nombreCompleto = $_POST['nombreCompleto'];
    $email = $_POST['correoElectronico'];
    $password = $_POST['contrasena'];
    $roleId = $_POST['roleId'];


    // Consulta la BD para actualizar los datos del usuario
    $sql = "UPDATE users
            SET NombreCompleto = '$nombreCompleto', Email = '$email', Password = '$password', role_id = $roleId
            WHERE id = $idUsuario";


    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);


    // Verificar si se realizó la actualización correctamente, y en caso de algun error notificar, y si es error de la BD que indique de que tipo
    if ($resultado) {
        echo "¡Usuario actualizado correctamente!";
        header("Location: ../MOSTRAR-USUARIOS.php");
        exit;
    } else {
        echo "Error al actualizar el usuario";
        if (!$resultado) {
            echo "Error en la consulta: " . mysqli_error($conexion);
        }
    }
} else {
    // Si no se recibió el ID del usuario, redirigir a la pagina de los usuarios
    header("Location: MOSTRAR-USUARIOS.php");
    exit;
}
?>