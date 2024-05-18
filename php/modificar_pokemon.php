<?php
    //Evito que el usuario pueda acceder al administrador si no paso el login
    $ruta_archivo = parse_ini_file("./config.ini");
    $ruta = $ruta_archivo["RUTA"];
    $url = $ruta_archivo["URL"];

    require_once($ruta."/php/conexion.php");
    if(!isset($_SESSION["usuario"]))
        header("Location:$url/index.php");

    /*Si es admmin pero no manda por get el parametro "id" entonces vuelve a su panel*/
    if(!isset($_GET["id"]))
        header("Location:$url/administrador.php");

    /*Obtengo los tipos */
    require_once("$ruta/php/obtenerTipos.php");
    $tipos = obtenerTipos();

    /*Obtengo el id (primary key) que se mandara por GET  y llamo al pokemon*/
    $id_pokemon = $_GET["id"];
    require_once("$ruta/php/obtener_un_pokemon.php");
    $pokemon = obtenerUnPokemonPorId($id_pokemon, $conexion);

    // var_dump($pokemon);
    // die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="./assets/css/formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Agregar</title>
</head>
<body>
    <?php require_once("$ruta/includes/header.php")?>
    <main class="main">

        <form action="<?="$url/php/actualizar_pokemon.php?id=".$pokemon["id"]?>" class="main__formulario" enctype="multipart/form-data" method="post">
            <h1 class="main__title">Actualiza al Pokemon!!</h1>
            <label>Identificador</label>
            <input type="number" name="identificador" id="identificador" value="<?=$pokemon["identificador"]?>" required>
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre"  value="<?=$pokemon["nombre"]?>" required>
            <label>Imagen</label>
            <input type="file" name="imagen" id="imagen" accept="image/*" required>
            <label>Tipo</label>
            <select name="tipo" required>
                <?php foreach($tipos as $tipo): ?>
                    <?php if($pokemon["tipo"] == $tipo->getImagen()):?>
                        <option value="<?=$tipo->getImagen()?>" selected><?=$tipo->getNombre()?></option>
                    <?php else:?>
                        <option value="<?=$tipo->getImagen()?>"><?=$tipo->getNombre()?></option>
                    <?php endif;?>
                <?php endforeach; ?>
            </select>
            <label>Descripcion</label>
            <textarea name="descripcion" id="descripcion"  required><?=$pokemon["descripcion"]?></textarea>
            <input type="submit" value="Actualizar" class="formulario__agregar">
        </form>
    </main>
    <?php require_once("$ruta/includes/footer.php")?>
</body>
</html>