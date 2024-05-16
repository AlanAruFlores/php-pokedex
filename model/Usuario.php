<?php
    class Usuario{
        private $id;
        private $usuario;
        private $contrasenia;

        public function __construct($id="", $usuario="", $contrasenia=""){
            $this->id = $id;
            $this->usuario = $usuario;
            $this->contrasenia = $contrasenia;
        }

        // Getter para la propiedad 'id'
        public function getId() {
            return $this->id;
        }

        // Setter para la propiedad 'id'
        public function setId($id) {
            $this->id = $id;
        }

        // Getter para la propiedad 'usuario'
        public function getUsuario() {
            return $this->usuario;
        }

        // Setter para la propiedad 'usuario'
        public function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        // Getter para la propiedad 'contrasenia'
        public function getContrasenia() {
            return $this->contrasenia;
        }

        // Setter para la propiedad 'contrasenia'
        public function setContrasenia($contrasenia) {
            $this->contrasenia = $contrasenia;
        }
    }
?>