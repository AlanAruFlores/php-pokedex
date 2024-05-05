<?php
function verificar($usuario, $contrasena, $conexion) {
    $sql__select = "SELECT * FROM usuario WHERE usuario = '$usuario' and contrasena = '$contrasena'";
    $resultado = mysqli_query($conexion, $sql__select);
    return mysqli_num_rows($resultado) == 1;
}


$ruta_archivo = parse_ini_file("./config.ini");
$ruta = $ruta_archivo["RUTA"];

require_once("$ruta/php/conexion.php");
$response = array();

if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $esValido = verificar($usuario, $contrasena,$conexion);

    if ($esValido) {
        $_SESSION["usuario"] = $usuario;
        $response['success'] = true;
    } else {
        $response['success'] = false;
        $response['message'] = 'Usuario o contraseña incorrectos';
    }
} else {
    $response['success'] = false;
    $response['message'] = 'Datos de inicio de sesión no proporcionados';
}

header('Content-Type: application/json');
echo json_encode($response);
?>
