<?php
require '../DAL/conexion.php';

$conexion = Conecta();

// Se haya apretado el botón de registro
if (isset($_POST['RegistroSesion'])) {

    // Almacenar la información del formulario
    $NombreCompleto = $_POST['nombreCompleto'];
    $Correo = $_POST['correoElectronico'];
    $Password = $_POST['contrasena_registro'];
    $role_id = $_POST['roleId'];


    // Verificar que el valor de "role_id" sea válido (1 o 2) que son los unicos disponibles y establecidos en la BD
    if ($role_id !== '1' && $role_id !== '2') {
        echo "Error: Valor de 'role_id' no válido.";
        exit; // O regresar a la página de registro con un mensaje de error
    }

    // Insertar en la Base de datos
    $sql = "INSERT INTO users (NombreCompleto, Email, Password, role_id) VALUES ('$NombreCompleto', '$Correo', '$Password', $role_id)";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "¡Usuario creado correctamente!";
        header("refresh:1; url=../MOSTRAR-USUARIOS.php");
    } else {
        echo "Error al crear el usuario";
        if (!$resultado) {
            echo "Error en la consulta: " . mysqli_error($conexion);
        }
    }
}
?>