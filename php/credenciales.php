<?php
// Leer las credenciales desde el archivo .ini
$credenciales = parse_ini_file('credenciales.ini');

// Devolver las credenciales como JSON
header('Content-Type: application/json');
echo json_encode($credenciales);
?>
