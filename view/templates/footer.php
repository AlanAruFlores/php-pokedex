    <!--Pie de Pagina-->
    <footer class="footer">
        <div class="footer__informacion1">
            <h2 class="footer__titulo">Poke<span>Info</span></h2>
            <h3 class="footer__subtitulo">Integrantes</h3>
            <ul class="footer__integrantes">
                <li>Alan Aruquipa</li>
                <li>Franco Vargas</li>
                <li>Lucas Gavagnin</li>
            </ul>
        </div>
        <div class="footer__informacion2">
            <h3 class="footer__subtitulo">Materia</h3>
            <p>Programacion Web II</p>
            <h3 class="footer__subtitulo">Universidad</h3>
            <p>	&#169; Universidad Nacional de la Matanza</p>
        </div>
    </footer>
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
     <script src="assets/scripts/popupjs.js"></script>
</body>
</html>