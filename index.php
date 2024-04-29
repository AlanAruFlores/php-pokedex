<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Pokedex</title>
</head>
<body>
    <?php require_once("./includes/header.php")?>
    <main class="main">
        <h1 class="main__titulo">¿Quien es ese pokemon?</h1>
        <form action="" class="main__formulario">
            <input type="text" name="" placeholder="pika pika">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <h2 class="main__titulo main__titulo--subtitulo">¿Que es la PokeInfo?</h2>
        <p class="main__parrafo">PokeInfo es el destino definitivo para todos los amantes y entrenadores de Pokémon. Con una extensa base de datos que abarca desde los clásicos de la primera generación hasta las últimas adiciones de las regiones más recientes. PokeInfo te ofrece una experiencia única y enriquecedora. ¡Prepárate para embarcarte en una aventura inigualable mientras exploras todo lo que PokeInfo tiene para ofrecer!</p>
        <table class="main__tabla">
            <caption class="tabla__titulo">Lista de Pokemons</caption>
            <thead class="tabla__header">
                <tr>
                    <th>Imagen</th>
                    <th>Tipo</th>
                    <th>Numero</th>
                    <th>Pokemon</th>
                </tr>
            </thead>
            <tbody class="tabla__body">
                <tr>
                    <td><img src="assets/imagenes/pokemons/Abra.png" class="tabla__imagen"></td>
                    <td><img src="assets/imagenes/tipos/tipo_psiquico_icono.png" class="tabla__icono"></td>
                    <td>1</td>
                    <td>Abra</td>
                </tr>
                <tr>
                    <td><img src="assets/imagenes/pokemons/Charizard.png" class="tabla__imagen"></td>
                    <td><img src="assets/imagenes/tipos/tipo_fuego_icono.png" class="tabla__icono"></td>
                    <td>2</td>
                    <td>Charizard</td>
                </tr>
            </tbody>
        </table>
    </main>

    <!--Pop up login-->

    <!-- <div class="popup">
        <a href="#" class="popup__cerrar"><i class="fa-solid fa-xmark"></i></a>
        <form class="popup__formulario" action="#" method="post">
            <h2 class="popup__titulo">Login</h2>
            <input type="text" placeholder="Usuario" required>
            <input type="text" placeholder="Contraseña" required>
            <input type="submit" value="Entrar">
        </form>
    </div>  -->
    <?php require_once("./includes/footer.php")?>
</body>
</html>