<?php 
    include_once("helper/Database.php");
    include_once("controller/PokemonController.php");
    include_once("model/PokemonModel.php");
    include_once("model/Pokemon.php");


    //Clase tipo Factory que retornara las instancias del proyecto y donde vamos a tener los controllers a usar
    class Configuration{


        public static function getConfig(){
            $config = parse_ini_file("config/config.ini");
            return $config;
        }

        public static function getDatabase(){
            $config = self::getConfig();
            $server = $config["HOST"];
            $user = $config["USUARIO"];
            $password = $config["CONTRASENIA"];
            $database = $config["BASE_DATOS"];
            
            return new Database($server,$user,$password,$database);
        }

        //Pokemon Controller y Modelo
        public static function getPokemonController(){
            return new PokemonController(self::getPokemonModel());
        }
        public static function getPokemonModel(){
            return new PokemonModel(self::getDatabase());
        }

        // Definir Usuario Controller y Modelo

    }
?>