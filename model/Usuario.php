<?php
    class Usuario{
        private $id;
        private $usuario;
        private $contrasena;

        public function __construct($id="", $usuario="", $contrasenia=""){
            $this->id = $id;
            $this->usuario = $usuario;
            $this->contrasena = $contrasenia;
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
        public function getContrasena() {
            return $this->contrasena;
        }

        // Setter para la propiedad 'contrasenia'
        public function setContrasena($contrasena) {
            $this->contrasena = $contrasena;
        }
    }
?>