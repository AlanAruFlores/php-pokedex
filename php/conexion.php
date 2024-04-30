<?php 

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

    /*
        <?php
        // Ruta del archivo .ini
        $ruta_archivo_ini = "archivo.ini";

        // Parsear el archivo .ini
        $datos_ini = parse_ini_file($ruta_archivo_ini);

        // Acceder a los valores
        $valor1 = $datos_ini['clave1'];
        $valor2 = $datos_ini['clave2'];

        // Utilizar los valores
        echo "Valor 1: " . $valor1 . "<br>";
        echo "Valor 2: " . $valor2 . "<br>";
        ?>
    */
?>

