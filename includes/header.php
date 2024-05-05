<header class="header">
    <div class="header__div">
        <h1 class="header__titulo">Poke<span class="header__sufijo">Info</span></h1>
        <img src="./assets/imagenes/pikachu.svg" class="header__logo">
    </div>

    <?php if (isset($_SESSION["usuario"])):?>
        <a href="<?="$url/php/cerrar_sesion.php"?>"class="header__link">Cerrar Sesion</a>
    <?php endif;?>

    
    <?php if (!isset($_SESSION["usuario"])):?>
        <a href="#" id="loginButton" class="header__link">Login</a>
    <?php endif;?>
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