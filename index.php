<?php 
    include_once("Configuration.php");
    
    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "";

    switch($controller){
        case "users":
            //Completar esta seccion
            break;
        default:
            $pokemonController = Configuration::getPokemonController();
            $pokemonController->listPokemons();   
            break;     
    }

?>