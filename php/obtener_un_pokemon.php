
<?php

    function obtenerUnPokemonPorId($id, $conexion){
       $sql = "SELECT * FROM pokemon WHERE id = $id";
       $result = mysqli_query($conexion, $sql);
       return mysqli_fetch_assoc( $result );
    }
?>