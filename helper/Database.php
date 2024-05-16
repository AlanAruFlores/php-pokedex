<?php
    class Database{

        private $conexion;
        public function __construct($host="localhost:3306", $user="root", $password="", $dbname="pokedex_db"){
            $this->conexion = mysqli_connect($host,$user,$password,$dbname);
        }

        public function executeQuery($sql){
            $result = mysqli_query($this->conexion, $sql);
            return mysqli_fetch_all($result , MYSQLI_ASSOC);
        }        

        public function __destruct(){
            mysqli_close($this->conexion);
        }

    }
?>