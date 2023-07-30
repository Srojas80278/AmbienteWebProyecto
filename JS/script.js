const $btnSignIn= document.querySelector('.sign-in-btn'),
      $btnSignUp = document.querySelector('.sign-up-btn'),  
      $signUp = document.querySelector('.sign-up'),
      $signIn  = document.querySelector('.sign-in');

/*Este eveneto lo que hace es dependiendo si se le da click se muestra el inicio de sesion o se muestra el registro, haciendo uso de las 
herramientas hidden y visible declaradas en el CSS, ahorrando codigo y espacio */
document.addEventListener('click', e => {
    if (e.target === $btnSignIn || e.target === $btnSignUp) {
        $signIn.classList.toggle('active');
        $signUp.classList.toggle('active')
    }
});




    function validarCorreo() {
        const email = document.getElementsByName("emial_registro")[0].value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validarRegistro() {
        const usuario = document.getElementsByName("usuario_registro")[0].value;
        const email = document.getElementsByName("emial_registro")[0].value;

        // Validar el nombre de usuario
        if (usuario.length > 20) {
            alert("El nombre de usuario no debe tener más de 20 caracteres.");
            return false;
        }

        // Validar el correo electrónico
        if (!validarCorreo()) {
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

