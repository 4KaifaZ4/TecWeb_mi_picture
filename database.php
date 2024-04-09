<?php
// Configuración de la base de datos
$servername = "localhost"; // Cambiar según tu servidor de base de datos
$username = "usuario"; // Cambiar según tu nombre de usuario de la base de datos
$password = "contraseña"; // Cambiar según tu contraseña de la base de datos
$database = "nombre_base_de_datos"; // Cambiar según el nombre de tu base de datos

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Ejecutar consultas, modificar según sea necesario
function ejecutarConsulta($sql) {
    global $conn;
    $result = $conn->query($sql);
    return $result;
}
?>
