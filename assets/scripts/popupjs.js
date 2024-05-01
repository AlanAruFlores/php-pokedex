document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const mensajeError = document.getElementById('mensajeError');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();

        const usuario = document.getElementById('usuario').value;
        const contrasena = document.getElementById('contrasena').value;

        const formData = new FormData();
        formData.append('usuario', usuario);
        formData.append('contrasena', contrasena);

        fetch('./validar_login.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const contenidoSecreto = document.querySelector('.popup');
                    contenidoSecreto.style.display = 'none';
                } else {
                    mensajeError.style.display = 'block';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });

    const cerrarPopup = document.querySelector('.popup__cerrar');
    cerrarPopup.addEventListener('click', function(event) {
        event.preventDefault();
        const contenidoSecreto = document.querySelector('.popup');
        contenidoSecreto.style.display = 'none';
    });
});
