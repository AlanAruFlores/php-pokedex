<?php 
    include_once("model/Tipo.php");

    class TipoModel{
        
        public function __construct(){
        }

        public function getAllTipos(){
            return array(
                new Tipo("Acero", "/php-pokedex/public/imagenes/tipos/tipo_acero.png"),
                new Tipo("Agua", "/php-pokedex/public/imagenes/tipos/tipo_agua.png"),
                new Tipo("Bicho", "/php-pokedex/public/imagenes/tipos/tipo_bicho.png"),
                new Tipo("Dragón", "/php-pokedex/public/imagenes/tipos/tipo_dragon.png"),
                new Tipo("Eléctrico", "/php-pokedex/public/imagenes/tipos/tipo_electrico.png"),
                new Tipo("Fantasma", "/php-pokedex/public/imagenes/tipos/tipo_fantasma.png"),
                new Tipo("Fuego", "/php-pokedex/public/imagenes/tipos/tipo_fuego.png"),
                new Tipo("Hada", "/php-pokedex/public/imagenes/tipos/tipo_hada.png"),
                new Tipo("Hielo", "/php-pokedex/public/imagenes/tipos/tipo_hielo.png"),
                new Tipo("Lucha", "/php-pokedex/public/imagenes/tipos/tipo_lucha.png"),
                new Tipo("Normal", "/php-pokedex/public/imagenes/tipos/tipo_normal.png"),
                new Tipo("Planta", "/php-pokedex/public/imagenes/tipos/tipo_planta.png"),
                new Tipo("Psíquico", "/php-pokedex/public/imagenes/tipos/tipo_psiquico.png"),
                new Tipo("Roca", "/php-pokedex/public/imagenes/tipos/tipo_roca.png"),
                new Tipo("Siniestro", "/php-pokedex/public/imagenes/tipos/tipo_siniestro.png")
            );
        }

        public function getAllTiposBasedPokemonTipo($tipos, $pokemon){
            foreach($tipos as $tipo){
                if($tipo->getImagen() == $pokemon["tipo"])
                    $tipo->esSuTipo = true;
                else
                    $tipo->esSuTipo = false;
            }

            return $tipos;
        }
    }

?>