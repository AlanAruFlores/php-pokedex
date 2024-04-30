document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const mensajeError = document.getElementById('mensajeError');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const usuario = document.getElementById('usuario').value;
        const contrasena = document.getElementById('contrasena').value;

        // Realizar solicitud AJAX para obtener las credenciales desde el archivo PHP
        fetch('credenciales.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error al obtener las credenciales');
                }
                return response.json();
            })
            .then(credenciales => {
                const usuario_valido = credenciales.usuario;
                const contrasena_valida = credenciales.contrasena;

                if (usuario === usuario_valido && contrasena === contrasena_valida) {
                    const contenidoSecreto = document.querySelector('.popup');
                    contenidoSecreto.style.display = 'none';
                } else {
                    mensajeError.style.display = 'block';
                }
            })
            .catch(error => {
                console.error(error);
            });
    });
});
