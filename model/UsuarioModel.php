<?php  

    class UsuarioModel{
        private $database;

        public function __construct($database){
            $this->database = $database;
        }

        public function getByUserAndPassword($usuario){
            $userAttributes = self::getUserAttributes($usuario);
            return $this->database->query("SELECT * FROM usuario WHERE usuario= '".$userAttributes["usuario"]."' and contrasena = '".$userAttributes["contrasena"]."';");
        }

        /*Obtenemos los atributos del Usuario*/
        public static function getUserAttributes($user){
            return array(
                "id" => $user->getId(),
                "usuario" => $user->getUsuario(),
                "contrasena" => $user->getContrasena()
            );
        }

    }
?>