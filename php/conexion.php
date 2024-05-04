<?php 
    session_start();
    $localhost = $ruta_archivo["HOST"];
    $puerto =  $ruta_archivo["PUERTO"];
    $usuario  = $ruta_archivo["USUARIO"];
    $contrasenia = $ruta_archivo["CONTRASENIA"];
    $baseDatos= $ruta_archivo["BASE_DATOS"];

    $conexion = mysqli_connect($localhost,$usuario,$contrasenia,$baseDatos,$puerto);

    if(mysqli_connect_errno()){
        echo "Hay un error en la bd";
    }else{  
        echo "Ya funca";
    }
?>

