<?php 
    $ruta_archivo = parse_ini_file("./config.ini");
    $ruta = $ruta_archivo["RUTA"];
    $url = $ruta_archivo["URL"];
    /*Obtengo todos los pokemons*/
    require_once("$ruta/php/conexion.php");

    /*Si el parametro "id" no existe, entonces vuelve a la ventana*/
    if(isset($_SESSION["usuario"]) && !isset($_GET["id"]))
        header("Location:$url/administrador.php");
    if(!isset($_GET["id"]))
        header("Location:$url/index.php");

    /*Obtengo el id (primary key) que se mandara por GET  y llamo al pokemon*/
    $id_pokemon = $_GET["id"];
    require_once("$ruta/php/obtener_un_pokemon.php");
    $pokemon = obtenerUnPokemonPorId($id_pokemon, $conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="./assets/css/info.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <title>Informacion</title>
</head>
<body>
    <?php require_once("$ruta/includes/header.php")?>

    <main class="main poke__info">
        <div class="poke__imagen">
            <img src="<?=$pokemon["imagen"]?>" alt="pokemon">
        </div>
        <div class="poke__tipo">
            <h1 class="poke__nombre"><?=$pokemon["nombre"]?></h1>
            <div class="poke__iconos">
                <img src="<?=$pokemon["tipo"]?>">
            </div>
        </div>
        <div class="poke__descripcion">
            <?=$pokemon["descripcion"]?>
        </div>
    </main>

    <!--Pop up login-->
    
    <div class="popup">
        <a href="#" class="popup__cerrar"><i class="fa-solid fa-xmark"></i></a>
        <form class="popup__formulario" action="#" method="post">
            <h2 class="popup__titulo">Login</h2>
            <input type="text" placeholder="Usuario" required>
            <input type="text" placeholder="Contraseña" required>
            <input type="submit" value="Entrar">
        </form>
    </div>  

    <?php require_once("$ruta/includes/footer.php")?>
</body>
</html>