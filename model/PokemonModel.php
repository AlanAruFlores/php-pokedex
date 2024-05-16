<?php
    class PokemonModel{
        private $database;

        public function __construct($database){
            $this->database = $database;
        }

        public function getAll(){
            return $this->database->executeQuery("SELECT * FROM pokemon");
        }

        public function getById($pokemon){
            return $this->database->executeQuery("SELECT * FROM pokemon WHERE id =".$pokemon->getId());
        }

        public function insert($pokemon){
            $pokemonAttributes = self::getPokemonAttributes($pokemon);
            
            return $this->database->executeQuery("INSERT INTO pokemon (identificador, imagen, nombre, tipo, descripcion) VALUES ('".$pokemonAttributes["identificador"]."', '".$pokemonAttributes["imagen"]."', '".$pokemonAttributes["nombre"]."', '".$pokemonAttributes["tipo"]."','".$pokemonAttributes["descripcion"]."');");
        }

        public function update($pokemon){
            $pokemonAttributes = self::getPokemonAttributes($pokemon);

            return $this->database->executeQuery("UPDATE pokemon SET identificador = '".$pokemonAttributes["identificador"]."', nombre= '".$pokemon["nombre"]."', tipo= '".$pokemonAttributes["tipo"]."', descripcion = '".$pokemonAttributes["descripcion"]."', imagen='".$pokemonAttributes["imagen"]."' WHERE id = '".$pokemonAttributes["id"]."';");
        }

        public function delete($pokemon){
            $pokemonAttributes = self::getPokemonAttributes($pokemon);
            return $this->database->executeQuery("DELETE FROM pokemon WHERE id = '".$pokemonAttributes["id"]."'");
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