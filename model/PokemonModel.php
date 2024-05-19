<?php
    class PokemonModel{
        private $database;

        public function __construct($database){
            $this->database = $database;
        }

        public function getAll(){
            return $this->database->query("SELECT * FROM pokemon");
        }

        public function getById($pokemon){
            return $this->database->query("SELECT * FROM pokemon WHERE id ='".$pokemon->getId()."'");
        }

        public function insert($pokemon){
            $pokemonAttributes = self::getPokemonAttributes($pokemon); 
            return $this->database->execute("INSERT INTO pokemon (identificador, imagen, nombre, tipo, descripcion) VALUES ('".$pokemonAttributes["identificador"]."', '".$pokemonAttributes["imagen"]."', '".$pokemonAttributes["nombre"]."', '".$pokemonAttributes["tipo"]."','".$pokemonAttributes["descripcion"]."');");
        }

        public function update($pokemon){
            $pokemonAttributes = self::getPokemonAttributes($pokemon);
            return $this->database->execute("UPDATE pokemon SET identificador = '".$pokemonAttributes["identificador"]."', nombre= '".$pokemonAttributes["nombre"]."', tipo= '".$pokemonAttributes["tipo"]."', descripcion = '".$pokemonAttributes["descripcion"]."', imagen='".$pokemonAttributes["imagen"]."' WHERE id = '".$pokemonAttributes["id"]."';");
        }

        public function deleteById($pokemon){
            $pokemonAttributes = self::getPokemonAttributes($pokemon);
            return $this->database->execute("DELETE FROM pokemon WHERE id = '".$pokemonAttributes["id"]."'");
        }

        public function searchPokemon($patron){
            return $this->database->query("SELECT * FROM pokemon WHERE nombre like '%$patron%'");
        }
        /*
            Obtenemos los atributos del pokemon
        */
        public static function getPokemonAttributes($pokemon){
            return array(
                "id" => $pokemon->getId(),
                "nombre" => $pokemon->getNombre(),
                "identificador" => $pokemon->getIdentificador(),
                "tipo" => $pokemon->getTipo(),
                "descripcion" => $pokemon->getDescripcion(),
                "imagen" => $pokemon->getImagen()
            );
        }
    }

?>