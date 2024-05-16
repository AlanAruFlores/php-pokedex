<?php include_once("view/templates/header.php")?>
<main class="main">
    <h1 class="main__titulo">¿Quien es ese pokemon?</h1>
        <form action="/index.php" class="main__formulario" method="get">
            <input type="text" name="patron" placeholder="pika pika">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <h2 class="main__titulo main__titulo--subtitulo">¿Que es la PokeInfo?</h2>
        <p class="main__parrafo">PokeInfo es el destino definitivo para todos los amantes y entrenadores de Pokémon. Con una extensa base de datos que abarca desde los clásicos de la primera generación hasta las últimas adiciones de las regiones más recientes. PokeInfo te ofrece una experiencia única y enriquecedora. ¡Prepárate para embarcarte en una aventura inigualable mientras exploras todo lo que PokeInfo tiene para ofrecer!</p>
        <table class="main__tabla">
                    <caption class=" tabla__titulo">Lista de Pokemons</caption>
                    <thead class="tabla__header">
                        <tr>
                            <th>Imagen</th>
                            <th>Tipo</th>
                            <th>Numero</th>
                            <th>Pokemon</th>
                        </tr>
                    </thead>
                    <tbody class="tabla__body">
                        <?php foreach($listPokemons as $key => $value): ?>
                            <tr>
                                <!-- <td><img src="./assets/imagenes/pokemons/bulbasaur.png" class="tabla__imagen"></td> -->
                                <td><img src='<?=$value["imagen"]?>' class="tabla__imagen"></td>
                                <td><img src='<?=$value["tipo"]?>' class="tabla__icono"></td>
                                <td><?=$value["identificador"]?></td>
                                <td><a href="<?="$url/info.php?id=".$value["id"]?>"><?=$value["nombre"]?></a></td>
                            </tr>       
                        <?php endforeach; ?>
                    </tbody>
        </table>
</main>
<?php include_once("view/templates/footer.php")?>
