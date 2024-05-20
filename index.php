<?php 
    session_start();
    include_once("Configuration.php");
    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "";
    $action = isset($_GET["action"]) ? $_GET["action"] : "";
    
    // Valido que no intente entrar como admin sin antes logearse
    if($controller == "admin" && !isset($_SESSION["usuario"]))
        header("Location:/php-pokedex/home/get");

    $router = Configuration::getRouter();   
    $router->route($controller, $action);
    
?>