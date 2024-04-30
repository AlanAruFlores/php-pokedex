document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const mensajeError = document.getElementById('mensajeError');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const usuario = document.getElementById('usuario').value;
        const contrasena = document.getElementById('contrasena').value;

        const usuario_valido = 'admin';
        const contrasena_valida = 'admin';

        if (usuario === usuario_valido && contrasena === contrasena_valida) {
            const contenidoSecreto = document.querySelector('.popup');
            contenidoSecreto.style.display = 'none';
        } else {
            mensajeError.style.display = 'block';
        }
    });
});
