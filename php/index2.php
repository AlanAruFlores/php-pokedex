<?php 

    $ruta_archivo = parse_ini_file("./config.ini");
    $ruta = $ruta_archivo["RUTA"];
    $url = $ruta_archivo["URL"];
    /*Obtengo todos los pokemons*/
    require_once("$ruta/php/obtenerPokemons.php");
    require_once("$ruta/php/conexion.php");
    
    /*Evaluo que no sea administrador*/
    if(isset($_SESSION["usuario"]))
        header("Location:$url/administrador.php");

    $listaPokemons = "";
    if(!isset($_GET["patron"]))
        $listaPokemons = obtenerPokemons($conexion);
    else
        $listaPokemons  = obtenerPokemons($conexion,$_GET["patron"]);

?>
    <?php require_once("$ruta/includes/header.php")?>
    <main class="main">
        <h1 class="main__titulo">¿Quien es ese pokemon?</h1>
        <form action="<?="$url/index.php"?>" class="main__formulario" method="get">
            <input type="text" name="patron" placeholder="pika pika">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <h2 class="main__titulo main__titulo--subtitulo">¿Que es la PokeInfo?</h2>
        <p class="main__parrafo">PokeInfo es el destino definitivo para todos los amantes y entrenadores de Pokémon. Con una extensa base de datos que abarca desde los clásicos de la primera generación hasta las últimas adiciones de las regiones más recientes. PokeInfo te ofrece una experiencia única y enriquecedora. ¡Prepárate para embarcarte en una aventura inigualable mientras exploras todo lo que PokeInfo tiene para ofrecer!</p>
        
        <!-- Verifico que haya un resultado  -->
        <?php if(mysqli_num_rows($listaPokemons) > 0): ?>
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
                <?php foreach($listaPokemons as $key => $value): ?>
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
        <?php endif; ?>


        <!-- Si no hay un resultado, saltara este mensaje-->
        <?php if(mysqli_num_rows($listaPokemons) <= 0):?>
            <div class="ningun__resultado">
                    No se encontro ningun resultado
            </div>
        <?php endif;?>
    </main>

    <!--Pop up login   agregar un ID y un listener.-->

    <div class="popup">
        <form id="loginForm" class="popup__formulario" method="post">
            <a href="#" class="popup__cerrar"><i class="fa-solid fa-xmark"></i></a>
            <h2 class="popup__titulo">Login</h2>
            <input type="text" id="usuario" placeholder="Usuario" required>
            <input type="password" id="contrasena" placeholder="Contraseña" required>
            <input type="submit" value="Entrar">
            <p id="mensajeError" style="color: #ffffff; display: none;">Usuario o contraseña incorrectos</p>
        </form>
    </div>

    <?php require_once("$ruta/includes/footer.php")?>

   