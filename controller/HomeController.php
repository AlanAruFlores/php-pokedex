<?php 
include_once("model/Pokemon.php");

class HomeController{
    private $pokemonModel;
    private $presenter;
    private $main_settings;

    public function __construct($pokemonModel,$presenter,$main_settings){
        $this->pokemonModel = $pokemonModel;
        $this->presenter = $presenter;
        $this->main_settings = $main_settings;
    }


    public function get(){
        /*Devuelve vista con datos */
        $listPokemons = $this->pokemonModel->getAll();
        $this->presenter->render("view/homeView.mustache",["listPokemons"=>$listPokemons,...$this->main_settings]);
    }

    public function showPokeInformation($id){
        $dtoPokemon = new Pokemon();
        $dtoPokemon->setId($id);
        $pokemon = $this->pokemonModel->getById($dtoPokemon);
        $this->presenter->render("view/showPokemonInfoView.mustache", ["pokemon"=>$pokemon,...$this->main_settings]);

    }

}?>