<?php
require '../DAL/conexion.php';

$conexion = Conecta();

// Se haya apretado el botón de registro
if (isset($_POST['RegistroSesion'])) {

    // Almacenar la información del formulario
    $NombreCompleto = $_POST['usuario_registro'];
    $Password = $_POST['contrasena_registro'];
    $Correo = $_POST['email_registro'];

    // Aquí obtienes el ID del rol correspondiente al rol "Cliente" desde la base de datos por defecto, esto porque los que inician
    //sesion son clientes, los administradores tienen que  modificar para que sea un Admin
    $sql = "SELECT id FROM roles WHERE nombre = 'Cliente'";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $role_id = $row['id'];

        // Insertar en la Base de datos
        $sql = "INSERT INTO users (NombreCompleto, Email, Password, role_id) VALUES ('$NombreCompleto', '$Correo', '$Password', $role_id)";

        $resultado = mysqli_query($conexion, $sql);

        //Importante que almacene el tipo de rol para que de esta manera pueda navegar con los accesos por roles establecidos en la pagina
        if ($resultado) {
            $_SESSION['username'] = $NombreCompleto;
            $_SESSION['role_id'] = $role_id;
            echo "¡Usuario creado correctamente!";
            header("refresh:1; url=../Login.php");
        } else {
            echo "Credenciales inválidos";
            header("refresh:1; url=../Login.php");
        }
    } else {
        echo "Error al obtener el ID del rol 'Cliente'";
        if (!$resultado) {
            echo "Error en la consulta: " . mysqli_error($conexion);
        }
    }
}
?>