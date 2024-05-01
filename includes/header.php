<header class="header">
    <div class="header__div">
        <h1 class="header__titulo">Poke<span class="header__sufijo">Info</span></h1>
        <img src="assets/imagenes/pikachu.svg" class="header__logo">
    </div>
    <a href="#" id="loginButton" class="header__link"><i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i> Login</a>
</header>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loginButton = document.getElementById('loginButton');

        loginButton.addEventListener('click', function(event) {
            event.preventDefault();

            const popup = document.querySelector('.popup');
            popup.style.display = 'flex';

        });
    });
</script>