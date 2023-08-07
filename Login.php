<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <title>Registro</title>
</head>

<body>
    <div id="mensaje" style="display: none;"></div>
    <div class="container-form sign-up">
        <div class="Bienvenido">
            <div class="message">
                <h2>Bienvenido a la peluquería</h2>
                <p>Si ya tienes una cuenta registrada, por favor inicia sesión</p>
                <button class="sign-up-btn">Iniciar Sesión</button>
            </div>
        </div>
        <!--Validaciones respectivas que cumplan con los parametros establecidos-->
        <form class="formulario" action="php/Registro.php" method="POST" onsubmit="return validarRegistro()">
            <h2 class="crear-cuenta">Registrate</h2>
            <p class="cuenta-gratis">Crear una cuenta</p>
            <input type="text" placeholder="Usuario" name="usuario_registro" maxlength="20" minlength="3" required>
            <span id="error_usuario" style="color: red; display: none;">El usuario es invalido</span>
            <input type="text" placeholder="Email" name="email_registro" required>
            <span id="error_correo" style="color: red; display: none;">El correo es invalido</span>
            <input type="password" placeholder="Contraseña" name="contrasena_registro" minlength="8" required>
            <span id="error_contrasena" style="color: red; display: none;">La contraseña necesita al menos 8 caracteres,
                un número y un caracter especial</span>
            <input type="submit" value="Registrarse" name="RegistroSesion">
            <br>
            <hr>
            <br>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-facebook'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-google'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin'></i>
                </div>
            </div>
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" action="php/login.php" method="POST" onsubmit="return validarInicioSesion()">
            <h2 class="crear-cuenta">Iniciar Sesión</h2>
            <p class="cuenta-gratis">¿Aún no tienes una cuenta?</p>
            <input type="text" placeholder="Usuario" name="usuario_login" required>
            <input type="password" placeholder="Contraseña" name="contrasena_login" required>
            <input type="submit" value="Iniciar sesion" name="InicioSesion">
            <br>
            <hr>
            <br>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-facebook'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-google'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin'></i>
                </div>
            </div>
        </form>
        <div class="Bienvenido">
            <div class="message">
                <h2>Empieza ahora</h2>
                <p>Si aún no tienes una cuenta por favor registrate y empieza a disfruta de los beneficios</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="JS/script.js"></script>
</body>

</html>