<?php
//Verifica el inicio de sesion por la validacion de roles
include 'include\templates\header.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Verifica si es Admin
if (!isset($_SESSION['role_id']) || $_SESSION['role_id'] != 1) {
    // Si el usuario no tiene el rol "Admin" o "id_rol=1", redirigirlo a otra página
    header("Location: Principal.php");
    exit;
}

require 'DAL/conexion.php';
$conexion = Conecta();

$sql = "SELECT u.id, u.NombreCompleto, u.Email, u.Password, r.nombre AS Rol
        FROM users u
        INNER JOIN roles r ON u.role_id = r.id";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="text-left">Tabla de Usuarios</h2>
        <div class="text-left">
            <!--Dirige al formulario de ingresar usuarios-->
            <a type="input" class="btn btn-primary" href="INSERTAR-USUARIOS.php">Ingresar Nuevo Usuario</a>
            <!--Descarga un Excel con todos los usuarios que hay almacenados en la BD-->
            <a type="input" class="btn btn-success" href="php/EXPORTAR-USUARIOS.php">Exportar Reporte</a>
        </div>
        <br>
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Rol</th>
                    <th>Acceso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Recorrer los resultados de la consulta y mostrarlos en la tabla
                // El boton editar Dirige a un formulario para editar los datos existentes del usuario
                //El boton eliminar Elimina desde la BD el usuario seleccionado
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['NombreCompleto'] . "</td>";
                    echo "<td>" . $fila['Email'] . "</td>";
                    echo "<td>********</td>"; // No se muestra la contraseña real
                    echo "<td>" . $fila['Rol'] . "</td>"; // Muestra el nombre del rol
                    echo "<td>
                    <a href='php/EDITAR-USUARIO.php?id=" . $fila['id'] . "' class='btn btn-warning'>Editar</a>
                    <a type=input name=Elimardor href='php/ELIMINAR-USUARIO.php?id=" . $fila['id'] . "' class='btn btn-danger'  onclick='return confirmarEliminar();' >Eliminar</a>
                  </td>";
                    echo "</tr>";


                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Mensaje de conirmacion de la eliminacion de un usuario debido a que es manejo de datos mas delicado-->
    <script>
        function confirmarEliminar() {
            return confirm("¿Estás seguro de que deseas eliminar este usuario? Esta acción no se puede deshacer.");
        }
    </script>
</body>

</html>