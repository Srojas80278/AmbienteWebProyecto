<?php
session_start();
require '../DAL/conexion.php';

$conexion = Conecta();

// Se haya apretado el botón de iniciar sesión
if (isset($_POST['InicioSesion'])) {

    // Almacenar la información del formulario
    $NombreCompleto = $_POST['usuario_login'];
    $Password = $_POST['contrasena_login'];

    // Consulta a la Base de datos (asegúrate de usar consultas preparadas para evitar SQL injection)
    $sql = "SELECT * FROM users WHERE NombreCompleto=? AND Password=?";
    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $NombreCompleto, $Password);
        mysqli_stmt_execute($stmt);

        $resultado = mysqli_stmt_get_result($stmt);

        // Verificar si se obtuvo un registro y obtener los datos del usuario
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $usuario = mysqli_fetch_assoc($resultado);
            $Rol = $usuario['role_id'];

            // Establecer la variable de sesión para el rol del usuario
            $_SESSION['role_id'] = $Rol;

            // Redireccionar a Principal.php, en caso de cualquier tipo de error, se devuelve al login 
            header('Location: ../Principal.php');
            exit(); // Asegúrate de terminar la ejecución del script después de redireccionar
        } else {
            echo "Credenciales inválidos";
            header("refresh:1; url=../Login.php");
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error al preparar la consulta";
        header("refresh:1; url=../Login.php");
    }
}
?>