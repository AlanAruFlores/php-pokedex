<?php 
    function obtenerTipos(){
        $ruta_archivo = parse_ini_file("./config.ini");
        $ruta = $ruta_archivo["RUTA"];


        require_once($ruta."/php/clases/Tipo.php");
        $tipos = array(
            new Tipo("Acero", "./assets/imagenes/tipos/tipo_acero.png"),
            new Tipo("Agua", "./assets/imagenes/tipos/tipo_agua.png"),
            new Tipo("Bicho", "./assets/imagenes/tipos/tipo_bicho.png"),
            new Tipo("Dragón", "./assets/imagenes/tipos/tipo_dragon.png"),
            new Tipo("Eléctrico", "./assets/imagenes/tipos/tipo_electrico.png"),
            new Tipo("Fantasma", "./assets/imagenes/tipos/tipo_fantasma.png"),
            new Tipo("Fuego", "./assets/imagenes/tipos/tipo_fuego.png"),
            new Tipo("Hada", "./assets/imagenes/tipos/tipo_hada.png"),
            new Tipo("Hielo", "./assets/imagenes/tipos/tipo_hielo.png"),
            new Tipo("Lucha", "./assets/imagenes/tipos/tipo_lucha.png"),
            new Tipo("Normal", "./assets/imagenes/tipos/tipo_normal.png"),
            new Tipo("Planta", "./assets/imagenes/tipos/tipo_planta.png"),
            new Tipo("Psíquico", "./assets/imagenes/tipos/tipo_psiquico.png"),
            new Tipo("Roca", "./assets/imagenes/tipos/tipo_roca.png"),
            new Tipo("Siniestro", "./assets/imagenes/tipos/tipo_siniestro.png")
        );
        return $tipos;
    }
?>