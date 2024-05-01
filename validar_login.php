<?php
session_start();

function consultarIni($usuario, $contrasena) {
    $credenciales = parse_ini_file('credenciales.ini');

    return isset($credenciales['usuario']) && isset($credenciales['contrasena']) &&
        $credenciales['usuario'] === $usuario && $credenciales['contrasena'] === $contrasena;
}

$response = array();

if (isset($_POST["usuario"]) && isset($_POST["contrasena"])) {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $esValido = consultarIni($usuario, $contrasena);

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
