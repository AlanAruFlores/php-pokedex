<?php 
    class Tipo{
        private $nombre;
        private $imagen;

        public function __construct($nombre, $imagen){
            $this->nombre = $nombre;
            $this->imagen = $imagen;
        }


        public function getNombre(){
            return $this->nombre;
        }
        public function getImagen(){
            return $this->imagen;
        }
    }
?>