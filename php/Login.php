<?php

require '../DAL/conexion.php';

$conexion = Conecta();

//Se haya apretado el boton de iniciar sesion
if(isset($_POST['InicioSesion'])) {

    //Almacenar la informacion de formulario
    $NombreCompleto=$_POST['usuario_login'];
    $Password= $_POST['contrasena_login'];

    //Consulta a la Base de datos
    $sql = "SELECT * FROM Usuario WHERE NombreCompleto='$NombreCompleto' AND Password='$Password'";
    $resultado=mysqli_query($conexion,$sql);
    $registros=mysqli_num_rows($resultado);
    if($registros!=0){
        header('Location: ../Principal.php');
        exit(); 
    }else{
            echo "Credenciales invalidos";
            header("refresh:1; url=../Login.html");
        }
    


}

?> 