<?php

require '../DAL/conexion.php';

$conexion = Conecta();

//Se haya apretado el boton de registro
if(isset($_POST['RegistroSesion'])) {

    //Almacenar la informacion del formulario
    $NombreCompleto = $_POST['usuario_registro'];
    $Password = $_POST['contrasena_registro'];
    $Correo = $_POST['emial_registro'];

    //Insertar en la Base de datos
    $sql = "INSERT INTO Usuario (UserID, NombreCompleto, Email, Password) VALUES (null, '$NombreCompleto', '$Correo', '$Password')";
    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        $_SESSION['username']=$NombreCompleto;
        echo "¡Usuario creado correctamente!";
        header("refresh:1; url=../Login.php");
    } else {
        echo "Credenciales invalidos";
        header("refresh:1; url=../Login.php");
    }

}

?>

