<?php 
    include_once("model/Pokemon.php");
    class AdminController{
        private  $pokemonModel;
        private $tipoModel;

        private $presenter;

        private $main_settings;
        public function __construct($pokemonModel,$tipoModel,$presenter,$main_settings){
            $this->pokemonModel = $pokemonModel;
            $this->tipoModel = $tipoModel;
            $this->presenter  = $presenter;
            $this->main_settings = $main_settings;
        }
        public function get(){
            $listPokemons = $this->pokemonModel->getAll();
            $this->presenter->render("view/adminPanelView.mustache",["listPokemons"=>$listPokemons,
                    "isListEmpty"=> count($listPokemons) == 0, ...$this->main_settings]);
        }
        public function showPokeInformation($id){
            $dtoPokemon = new Pokemon();
            $dtoPokemon->setId($id);
            $pokemon = $this->pokemonModel->getById($dtoPokemon);
            $this->presenter->render("view/showPokemonInfoView.mustache", ["pokemon"=>$pokemon,...$this->main_settings]);
        }

        public function goToAddPokemon(){
            $tipos = $this->tipoModel->getAllTipos();
            $this->presenter->render("view/addPokemonView.mustache",["tipos"=>$tipos,...$this->main_settings]);
        }

        public function goToModifyPokemon($id){

            $dtoPokemon = new Pokemon();
            $dtoPokemon->setId($id);
            $pokemon = $this->pokemonModel->getById($dtoPokemon);
            $tipos = $this->tipoModel->getAllTipos();
            $tipos = $this->tipoModel->getAllTiposBasedPokemonTipo($tipos,$pokemon);
            $this->presenter->render("view/modifyPokemonView.mustache",["pokemon"=>$pokemon ,"tipos"=>$tipos, ...$this->main_settings]);
        }
    }


?>