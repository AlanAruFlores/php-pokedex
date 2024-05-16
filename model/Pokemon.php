<?php
    class Pokemon{
        private $id;
        private $identificador;
        private $nombre;
        private $imagen;
        private $descripcion;
        private $tipo;

        public function __construct($id="",$identificador="", $nombre="", $imagen="", $descripcion="",$tipo=""){
            $this->id = $id;
            $this->identificador = $identificador;
            $this->nombre  = $nombre;
            $this->imagen = $imagen;
            $this->descripcion = $descripcion;
            $this->tipo = $tipo;
        }

        // Getter para la propiedad 'id'
        public function getId() {
            return $this->id;
        }

        // Setter para la propiedad 'id'
        public function setId($id) {
            $this->id = $id;
        }

        // Getter para la propiedad 'identificador'
        public function getIdentificador() {
            return $this->identificador;
        }

        // Setter para la propiedad 'identificador'
        public function setIdentificador($identificador) {
            $this->identificador = $identificador;
        }

        // Getter para la propiedad 'nombre'
        public function getNombre() {
            return $this->nombre;
        }

        // Setter para la propiedad 'nombre'
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        // Getter para la propiedad 'imagen'
        public function getImagen() {
            return $this->imagen;
        }

        // Setter para la propiedad 'imagen'
        public function setImagen($imagen) {
            $this->imagen = $imagen;
        }

        // Getter para la propiedad 'descripcion'
        public function getDescripcion() {
            return $this->descripcion;
        }

        // Setter para la propiedad 'descripcion'
        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        // Getter para la propiedad 'tipo'
        public function getTipo() {
            return $this->tipo;
        }

        // Setter para la propiedad 'tipo'
        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }


        
    }
?>