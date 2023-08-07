const $btnSignIn = document.querySelector('.sign-in-btn'),
    $btnSignUp = document.querySelector('.sign-up-btn'),
    $signUp = document.querySelector('.sign-up'),
    $signIn = document.querySelector('.sign-in');

/*Este eveneto lo que hace es dependiendo si se le da click se muestra el inicio de sesion o se muestra el registro, haciendo uso de las 
herramientas hidden y visible declaradas en el CSS, ahorrando codigo y espacio */
document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
    }
});



function validarCorreo() {
    const email = document.getElementsByName("email_registro")[0].value;
    const emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if (!emailRegex.test(email)) {
        document.getElementById("error_correo").style.display = "block";
        return false;
    }
    return true;
}

function validarRegistro() {
    const usuario = document.getElementsByName("usuario_registro")[0].value;

    const contrasena = document.getElementsByName("contrasena_registro")[0].value;



    // Revisa que la contraseña tenga al menos 8 caracteres y contenga al menos un número y un caracter especial
    const contraregex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;
    if (!contraregex.test(contrasena)) {
        document.getElementById("error_contrasena").style.display = "block";
        alert("La contraseña necesita al menos 8 caracteres, un numero y caracter especial")
        return false;
    }


    // Validar el nombre de usuario
    if (usuario.length > 20) {
        document.getElementById("error_usuario").style.display = "block";
        alert("El nombre de usuario no debe tener más de 20 caracteres.");
        return false;
    }

    //No pueden ser menos de dos caracteres de extension en el nombre de usuario
    if (usuario.length < 2) {
        document.getElementById("error_usuario").style.display = "block";
        alert("El nombre de usuario debe tener más de 3 caracteres.");
        return false;
    }


    // Validar el correo electrónico
    if (!validarCorreo()) {
        document.getElementById("error_correo").style.display = "block";
        alert("Por favor, ingresa un correo electrónico válido.");
        return false;
    }

    return true;
}


function validarInicioSesion() {
    const usuario = document.getElementsByName("usuario_login")[0].value;

    // Validar el nombre de usuario
    if (usuario.length > 20) {
        alert("El nombre de usuario no debe tener más de 20 caracteres.");
        return false;
    }

    return true;
}

