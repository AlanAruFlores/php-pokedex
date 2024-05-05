<?php 

    $ruta_archivo = parse_ini_file("../config.ini");
    $ruta = $ruta_archivo["RUTA"];
    $url = $ruta_archivo["URL"];
    require_once($ruta."/php/conexion.php");

    /*Obtengo el ID */
    $id = $_GET["id"];

    $identificador = isset($_POST["identificador"]) && $_POST["identificador"] > 0 ? $_POST["identificador"] : 1;
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "Indefinido";
    $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
    $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "No tiene descripcion";

    $imagen = $_FILES["imagen"];
    $nombreImagen = $imagen["name"];
    $rutaImagen = "./assets/imagenes/pokemons/$nombreImagen";
    // var_dump($imagen);
    // var_dump($_POST);
    move_uploaded_file($imagen["tmp_name"], $ruta."".$rutaImagen);

    $sql_update= "UPDATE pokemon SET identificador = '$identificador', nombre= '$nombre', tipo= '$tipo', descripcion = '$descripcion', imagen='$rutaImagen' WHERE id = $id";

    $result = mysqli_query($conexion,$sql_update);

    header("Location:$url/administrador.php");
?>