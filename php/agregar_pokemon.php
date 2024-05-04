<?php

    $ruta_archivo = parse_ini_file("../config.ini");
    $ruta = $ruta_archivo["RUTA"];
    require_once($ruta."/php/conexion.php");

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

    $sql_insert = "INSERT INTO pokemon (identificador, imagen, nombre, tipo, descripcion) VALUES 
    ('$identificador', '$rutaImagen', '$nombre', '$tipo','$descripcion')";

    $resultado = mysqli_query($conexion,$sql_insert);
?>