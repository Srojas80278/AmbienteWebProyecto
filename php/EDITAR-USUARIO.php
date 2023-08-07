<?php
session_start();
//Verificar el usuario
if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 1) {
    // Si el usuario no tiene el rol "Admin" o "id_rol=1", redirigirlo a otra página
    header("Location: Principal.php");
    exit;
}


require '../DAL/conexion.php';

// Verificar si se recibió el ID del usuario a editar
if (isset($_GET['id'])) {
    // Obtener el ID del usuario desde la URL
    $idUsuario = $_GET['id'];

    // Establecer la conexión a la base de datos
    $conexion = Conecta();

    // Consulta la BD para obtener los datos del usuario por su ID
    $sql = "SELECT id, NombreCompleto, Email, Password, role_id
            FROM users
            WHERE id = $idUsuario";


    $resultado = mysqli_query($conexion, $sql);

    // Verificar si se encontró el usuario con el ID proporcionado
    if (mysqli_num_rows($resultado) > 0) {
        // Obtener los datos del usuario
        $fila = mysqli_fetch_assoc($resultado);
        $nombreCompleto = $fila['NombreCompleto'];
        $email = $fila['Email'];
        $password = $fila['Password'];
        $roleId = $fila['role_id'];
    } else {
        // Si no se encontró el usuario, redirigir a la página de los usuarios
        header("Location: MOSTRAR-USUARIOS.php");
        exit;
    }
} else {
    // Si no se recibió el ID del usuario, redirigir a la página de los usuarios
    header("Location: MOSTRAR-USUARIOS.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-center">Editar Usuario</h2>
        <form action="ACTUALIZAR-USUARIO.php" method="POST">
            <!--En este formulario se muestran los datos del usuario obtenidos por la ID desde la Base de datos-->
            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo</label>
                <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto"
                    value="<?php echo $nombreCompleto; ?>" required>
            </div>
            <div class="form-group">
                <label for="correoElectronico">Correo Electrónico</label>
                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico"
                    value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena"
                    value="<?php echo $password; ?>" required>
            </div>
            <div class="form-group">
                <label for="roleId">Rol</label>
                <select class="form-control" id="roleId" name="roleId" required>
                    <option value="1" <?php if ($roleId == 1)
                        echo 'selected'; ?>>Admin</option>
                    <option value="2" <?php if ($roleId == 2)
                        echo 'selected'; ?>>Cliente</option>
                </select>
            </div>
            <div class="text-center">
                <!-- Ejecutar la actualizacion -->
                <button type="submit" class="btn btn-success" name="ActualizarUsuario">Actualizar</button>
                <!-- Cancelar la modificacion y volver a la tabla de usuarios -->
                <a type="input" class="btn btn-danger" href="../MOSTRAR-USUARIOS.php">Cancelar</a>
            </div>

        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>