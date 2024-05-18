<?php 
include_once("model/Pokemon.php");

class HomeController{
    private $model;
    private $presenter;

    private $main_settings;

    public function __construct($model,$presenter,$main_settings){
        $this->model = $model;
        $this->presenter = $presenter;
        $this->main_settings = $main_settings;
    }


    public function get(){
        /*Devuelve vista con datos */
        $listPokemons = $this->model->getAll();
        $this->presenter->render("view/homeView.mustache",["listPokemons"=>$listPokemons,...$this->main_settings]);
    }

    public function showPokeInformation($id){
        $dtoPokemon = new Pokemon();
        $dtoPokemon->setId($id);
        $pokemon = $this->model->getById($dtoPokemon);
        $this->presenter->render("view/showPokemonInfoView.mustache", ["pokemon"=>$pokemon,...$this->main_settings]);

    }

}?>