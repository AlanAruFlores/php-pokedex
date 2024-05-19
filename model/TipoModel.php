<?php 
    include_once("model/Tipo.php");

    class TipoModel{
        
        public function __construct(){
        }

        public function getAllTipos(){
            return array(
                new Tipo("Acero", "./public/imagenes/tipos/tipo_acero.png"),
                new Tipo("Agua", "./public/imagenes/tipos/tipo_agua.png"),
                new Tipo("Bicho", "./public/imagenes/tipos/tipo_bicho.png"),
                new Tipo("Dragón", "./public/imagenes/tipos/tipo_dragon.png"),
                new Tipo("Eléctrico", "./public/imagenes/tipos/tipo_electrico.png"),
                new Tipo("Fantasma", "./public/imagenes/tipos/tipo_fantasma.png"),
                new Tipo("Fuego", "./public/imagenes/tipos/tipo_fuego.png"),
                new Tipo("Hada", "./public/imagenes/tipos/tipo_hada.png"),
                new Tipo("Hielo", "./public/imagenes/tipos/tipo_hielo.png"),
                new Tipo("Lucha", "./public/imagenes/tipos/tipo_lucha.png"),
                new Tipo("Normal", "./public/imagenes/tipos/tipo_normal.png"),
                new Tipo("Planta", "./public/imagenes/tipos/tipo_planta.png"),
                new Tipo("Psíquico", "./public/imagenes/tipos/tipo_psiquico.png"),
                new Tipo("Roca", "./public/imagenes/tipos/tipo_roca.png"),
                new Tipo("Siniestro", "./public/imagenes/tipos/tipo_siniestro.png")
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