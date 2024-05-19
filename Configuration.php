<?php 
    include_once("helper/Database.php");
    include_once("helper/MustachePresenter.php");
    include_once("controller/HomeController.php");
    include_once("controller/AdminController.php");
    include_once("model/PokemonModel.php");
    include_once("model/TipoModel.php");
    include_once("model/Pokemon.php");
    include_once("Router.php");

    include_once("vendor/mustache/src/Mustache/Autoloader.php");

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
        public static function getHomeController(){
            return new HomeController(self::getPokemonModel(),self::getPresenter(), self::getMainSettings());
        }

        public static function getAdminController(){
            return new AdminController(self::getPokemonModel(),self::getTipoModel(),self::getPresenter(), self::getMainSettings());
        }

        public static function getPokemonModel(){
            return new PokemonModel(self::getDatabase());
        }

        public static function getTipoModel(){
            return new TipoModel();
        }

        public static function getRouter(){
            return new Router("getHomeController","get");
        }
        
        public static function getPresenter(){
            // Le pasamos el controlador y metodo por defectos
            return new MustachePresenter("view/templates");
        }

        public static function getMainSettings(){
            $main_settings = array(
                "is_update_or_add_pokemon" => ($_GET["controller"] == "update_pokemon" || $_GET["controller"] == "add_pokemon"),
                "is_show_info" => isset($_GET["action"]) ? ($_GET["action"] == "info") : false,
                "is_logged" => isset($_SESSION["usuario"])
            );
            return $main_settings;
        }
        // Definir Usuario Controller y Modelo

    }
?>