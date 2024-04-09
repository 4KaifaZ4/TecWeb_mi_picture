<?php
// Configuración de la base de datos
define('DB_SERVER', 'localhost'); // Cambiar según tu servidor de base de datos
define('DB_USERNAME', 'usuario'); // Cambiar según tu nombre de usuario de la base de datos
define('DB_PASSWORD', 'contraseña'); // Cambiar según tu contraseña de la base de datos
define('DB_NAME', 'nombre_base_de_datos'); // Cambiar según el nombre de tu base de datos

// Intentar conectar con la base de datos usando las constantes definidas
try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Establecer el modo de error de PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
