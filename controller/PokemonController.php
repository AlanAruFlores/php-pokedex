<?php 

class PokemonController{
    private $model;

    public function __construct($model){
        $this->model = $model;
    }


    public function listPokemons(){
        /*Devuelve vista con datos */
        $listPokemons = $this->model->getAll();
        include_once("view/listPokemonsView.php");
    }


     
}?>