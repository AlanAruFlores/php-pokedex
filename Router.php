<?php  
    class Router{

        public function __construct(){

        }
        
        public function route($controller, $action){
            switch($controller){
                case "users":
                    //Completar esta seccion
                    break;
                case "admin":
                    $adminController = Configuration::getAdminController();
                    $adminController->get();
                    break;
                case "add_pokemon":
                    $adminController = Configuration::getAdminController();
                    $adminController->goToAddPokemon();
                    break;
                case "update_pokemon":
                    $adminController = Configuration::getAdminController();
                    $adminController->goToModifyPokemon(4);
                    break;
                case "show_info":
                    $homeController = Configuration::getHomeController();
                    $homeController->showPokeInformation(1);
                    break;
                default:
                    $homeController = Configuration::getHomeController();
                    $homeController->get();   
                    break;     
            }
        
        }
    }
?>