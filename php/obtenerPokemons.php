
<?php 
    function obtenerPokemons($conexion){
        $sql = "SELECT * FROM pokemon";
        $result = mysqli_query($conexion, $sql);
        return $result;
    }
?>