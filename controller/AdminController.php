<?php 
    include_once("model/Pokemon.php");

    class AdminController{
        private  $model;
        private $presenter;

        private $main_settings;
        public function __construct($model,$presenter,$main_settings){
            $this->model = $model;
            $this->presenter  = $presenter;
            $this->main_settings = $main_settings;
        }
        public function get(){
            $listPokemons = $this->model->getAll();
            $this->presenter->render("view/adminPanelView.mustache",["listPokemons"=>$listPokemons,
                    "isListEmpty"=> count($listPokemons) == 0, ...$this->main_settings]);
        }
        public function showPokeInformation($id){
            $dtoPokemon = new Pokemon();
            $dtoPokemon->setId($id);
            $pokemon = $this->model->getById($dtoPokemon);
            $this->presenter->render("view/showPokemonInfoView.mustache", ["pokemon"=>$pokemon,...$this->main_settings]);
        }

        public function goToAddPokemon(){
            $this->presenter->render("view/addPokemonView.mustache",[...$this->main_settings]);
        }

        public function goToModifyPokemon($id){

            $dtoPokemon = new Pokemon();
            $dtoPokemon->setId($id);
            $pokemon = $this->model->getById($dtoPokemon);
            $this->presenter->render("view/modifyPokemonView.mustache",["pokemon"=>$pokemon , ...$this->main_settings]);
        }
    }


?>