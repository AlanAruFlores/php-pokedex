<?php 
    // echo "UPS";
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
        public function info(){
            $id = $_GET["id"];
            $dtoPokemon = new Pokemon();
            $dtoPokemon->setId($id);
            $pokemon = $this->pokemonModel->getById($dtoPokemon);
            $this->presenter->render("view/showPokemonInfoView.mustache", ["pokemon"=>$pokemon,...$this->main_settings]);
        }

        public function add(){
            $tipos = $this->tipoModel->getAllTipos();
            $this->presenter->render("view/addPokemonView.mustache",["tipos"=>$tipos,...$this->main_settings]);
        }
        public function addNewPokemon(){
            $identificador = isset($_POST["identificador"]) && $_POST["identificador"] > 0 ? $_POST["identificador"] : 1;
            $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "Indefinido";
            $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
            $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "No tiene descripcion";
            $imagen = $_FILES["imagen"];
            $nombreImagen = $imagen["name"];
            $rutaImagen = "/php-pokedex/public/imagenes/pokemons/$nombreImagen";

            $pokemon = new Pokemon(null,$identificador,$nombre,$rutaImagen,$descripcion,$tipo);
            $this->pokemonModel->insert($pokemon);

            move_uploaded_file($imagen["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$rutaImagen);
            header("Location:/php-pokedex/admin/get");
        }

        public function update(){
            $id = isset($_GET["id"]) ? $_GET["id"] : "";
            $dtoPokemon = new Pokemon();
            $dtoPokemon->setId($id);
            $pokemon = $this->pokemonModel->getById($dtoPokemon);

            $tipos = $this->tipoModel->getAllTipos();
            $tipos = $this->tipoModel->getAllTiposBasedPokemonTipo($tipos,$pokemon);
            $this->presenter->render("view/modifyPokemonView.mustache",["pokemon"=>$pokemon ,"tipos"=>$tipos, ...$this->main_settings]);
        }

        public function updatePokemon(){
            $id=isset($_POST["id"]) ? $_POST["id"] : "";
            $identificador = isset($_POST["identificador"]) && $_POST["identificador"] > 0 ? $_POST["identificador"] : 1;
            $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "Indefinido";
            $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : "";
            $descripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "No tiene descripcion";
            $imagen = $_FILES["imagen"];
            $nombreImagen = $imagen["name"];
            $rutaImagen = "/php-pokedex/public/imagenes/pokemons/$nombreImagen";

            $pokemon = new Pokemon($id,$identificador,$nombre,$rutaImagen,$descripcion,$tipo);
            $this->pokemonModel->update($pokemon);

            move_uploaded_file($imagen["tmp_name"], $_SERVER['DOCUMENT_ROOT'].$rutaImagen);
            header("Location:/php-pokedex/admin/get");
        }

        public function delete(){
            $id = isset($_GET["id"]) ? $_GET["id"] : "";
            $dtoPokemon = new Pokemon();
            $dtoPokemon->setId($id);
            $this->pokemonModel->deleteById($dtoPokemon);
            header("Location:/php-pokedex/admin/get");
        }

        public function search(){
            $patron = isset($_POST["patron"]) ? $_POST["patron"] : "";
            $listPokemons = array();
            if($patron == "")
                $listPokemons = $this->pokemonModel->getAll();
            else
                $listPokemons = $this->pokemonModel->searchPokemon($patron);

            $this->presenter->render("view/adminPanelView.mustache",["listPokemons"=>$listPokemons,
                "isListEmpty"=> count($listPokemons) == 0, ...$this->main_settings]);
        }
    }


?>