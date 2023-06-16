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