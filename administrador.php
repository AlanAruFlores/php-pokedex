<?php
    //Evito que el usuario pueda acceder al administrador si no paso el login
    $ruta_archivo = parse_ini_file("./config.ini");
    $ruta = $ruta_archivo["RUTA"];
    $url = $ruta_archivo["URL"];
    require_once("$ruta/php/conexion.php");

    require_once("$ruta/php/obtenerPokemons.php");

    if(!isset($_SESSION["usuario"])) {
        header("Location:index.php");
    }

    $listaPokemons = obtenerPokemons($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Administracion</title>
</head>
<body>
    <?php require_once("$ruta/includes/header.php")?>

    <main class="main">
        <h1 class="main__titulo">¿Quien es ese pokemon?</h1>
        <form action="" class="main__formulario">
            <input type="text" name="" placeholder="pika pika">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>

        <h2 class="main__titulo main__titulo--subtitulo">¿Que es la PokeInfo?</h2>
        <p class="main__parrafo">PokeInfo es el destino definitivo para todos los amantes y entrenadores de Pokémon. Con una extensa base de datos que abarca desde los clásicos de la primera generación hasta las últimas adiciones de las regiones más recientes. PokeInfo te ofrece una experiencia única y enriquecedora. ¡Prepárate para embarcarte en una aventura inigualable mientras exploras todo lo que PokeInfo tiene para ofrecer!</p>
        <table class="main__tabla">
            <caption class="tabla__titulo">Lista de Pokemons
                <a href="<?="$url/nuevo_pokemon.php"?>" class="tabla__agregar">Agregar nuevo Pokemon</a>
            </caption>
            <thead class="tabla__header">
                <tr>
                    <th>Imagen</th>
                    <th>Tipo</th>
                    <th>Numero</th>
                    <th>Pokemon</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody class="tabla__body">
                <?php foreach($listaPokemons as $key => $value): ?>
                    <tr>
                        <td><img src='<?=$value["imagen"]?>' class="tabla__imagen"></td>
                        <td><img src='<?=$value["tipo"]?>' class="tabla__icono"></td>
                        <td><?=$value["id"]?></td>
                        <td><a href="<?="$url/info.php?id=".$value["id"]?>"><?=$value["nombre"]?></a></td>
                        <td><a href="<?="$url/modificar_pokemon.php?id=".$value["id"]?>" class="tabla__editar"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="<?="$url/php/dar_de_baja.php?id=".$value["id"]?>" class="tabla__eliminar"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>       
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    <?php require_once("$ruta/includes/footer.php")?>
</body>
</html>