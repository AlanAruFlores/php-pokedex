<?php
    $ruta_archivo = parse_ini_file("../config.ini");
    $ruta = $ruta_archivo["RUTA"];
    $url = $ruta_archivo["URL"];
    require_once($ruta."/php/conexion.php");

    /*Verifico que antes este logeado */
    if(!isset($_SESSION["usuario"]))
        header("Location:$url/index.php");

    /*Verifico que me mande el id */
    if(!isset($_GET["id"])) 
        header("Location:$url/administrador.php");

    $id = $_GET["id"];

    $sql_delete = "DELETE FROM pokemon WHERE id = $id";
    $result = mysqli_query($conexion, $sql_delete);
    
    header("Location:$url/administrador.php");
?>