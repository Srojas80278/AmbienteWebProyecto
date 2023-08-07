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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR USUARIOS</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <!--Otro tipo de formulario para registrar nuevos usuarios, pero esta vez mas personalizado por ser un Administrador el que lo 
            hace de manera manual, pudiendo selecccionar el rol directamente por ejemplo-->
                <form action="php/REGISTRO-USUARIOS.php" method="POST">
                    <div class="form-group">
                        <label for="nombreCompleto">Nombre Completo</label>
                        <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" required>
                    </div>
                    <div class="form-group">
                        <label for="correoElectronico">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correoElectronico" name="correoElectronico"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena_registro" required>
                    </div>
                    <div class="form-group">
                        <label for="roleId">Role ID</label>
                        <select class="form-control" id="roleId" name="roleId" required>
                            <option value="">Selecciona un Role ID</option>
                            <option value="1">Admin</option>
                            <option value="2">Cliente</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <!--Cuando se haya validado la informacion y se desee almacenar en la BD-->
                        <button type="submit" class="btn btn-success" name="RegistroSesion">Guardar</button>
                        <!--En el caso de que se cancele la operacion devolver a la pagina de los usuarios-->
                        <a type="input" class="btn btn-danger" onclick="cancelar()"
                            href="MOSTRAR-USUARIOS.php">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Alerta con JS de cancelacion de formulario-->
    <script>
        function cancelar() {
            // Aquí puedes realizar alguna acción si se presiona el botón "Cancelar"
            alert("Formulario cancelado.");
        }
    </script>
</body>

</html>