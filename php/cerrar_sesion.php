<?php

    $ruta_archivo = parse_ini_file("../config.ini");
    $url = $ruta_archivo["URL"];
    session_start();
    session_destroy();

    header("Location:$url/index.php");
?>