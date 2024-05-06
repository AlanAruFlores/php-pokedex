<?php 
    session_start();
    $localhost = $ruta_archivo["HOST"];
    $usuario  = $ruta_archivo["USUARIO"];
    $contrasenia = $ruta_archivo["CONTRASENIA"];
    $baseDatos= $ruta_archivo["BASE_DATOS"];

    $conexion = mysqli_connect($localhost,$usuario,$contrasenia,$baseDatos);
?>

