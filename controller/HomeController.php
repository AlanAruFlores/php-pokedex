<?php 
include_once("model/Pokemon.php");
include_once("model/Usuario.php");

class HomeController{
    private $pokemonModel;
    private $usuarioModel;
    private $presenter;
    private $main_settings;

    public function __construct($pokemonModel,$usuarioModel,$presenter,$main_settings){
        $this->pokemonModel = $pokemonModel;
        $this->usuarioModel = $usuarioModel;
        $this->presenter = $presenter;
        $this->main_settings = $main_settings;
    }


    public function get(){
        /*Devuelve vista con datos */
        $listPokemons = $this->pokemonModel->getAll();
        $this->presenter->render("view/homeView.mustache",["listPokemons"=>$listPokemons,...$this->main_settings]);
    }

    public function info(){
        $id = $_GET["id"];
        $dtoPokemon = new Pokemon();
        $dtoPokemon->setId($id);
        $pokemon = $this->pokemonModel->getById($dtoPokemon);
        $this->presenter->render("view/showPokemonInfoView.mustache", ["pokemon"=>$pokemon,...$this->main_settings]);
    }
    public function search(){
        $patron = isset($_POST["patron"]) ? $_POST["patron"] : "";
        $listPokemons = array();
        if($patron == "")
            $listPokemons = $this->pokemonModel->getAll();
        else
            $listPokemons = $this->pokemonModel->searchPokemon($patron);

        $this->presenter->render("view/homeView.mustache",["listPokemons"=>$listPokemons,
            "isListEmpty"=> count($listPokemons) == 0, ...$this->main_settings]);
    }

    public function login(){ 
        $mensajeError = "";
        // var_dump($_POST);
        // die();  
        if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
            $usuario = $_POST["usuario"];
            $contrasena = $_POST["contrasena"];
            $dtoUsuario = new Usuario(null,$usuario, $contrasena);

            $usuarioValido = $this->usuarioModel->getByUserAndPassword($dtoUsuario);
            // var_dump($usuarioValido);
            // die();
            if ($usuarioValido != null) {
                $_SESSION["usuario"] = $usuarioValido;
                header("Location:/php-pokedex/admin/get");
            } else {
                $mensajeError = "Datos Invalidos e Incorrrectos";
            }
        } else {
            $mensajeError = "Datos no proporcionados";
        }

        $listPokemons = $this->pokemonModel->getAll();
        $this->presenter->render("view/homeView.mustache",["listPokemons"=>$listPokemons,...$this->main_settings,"mensajeError" => $mensajeError, "display"=>"flex"]);
    }
}?>