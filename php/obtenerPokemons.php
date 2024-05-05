
<?php 
    function obtenerPokemons($conexion, $patron=""){
        $sql = "";
        if($patron  == "")
            $sql = "SELECT * FROM pokemon";
        else
            $sql = "SELECT * FROM pokemon WHERE nombre like '%$patron%'";
        $result = mysqli_query($conexion, $sql);
        return $result;
    }
?>