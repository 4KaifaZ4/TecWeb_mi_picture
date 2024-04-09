<?php
// Verificar si se ha enviado el formulario de contacto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Aquí deberías incluir la lógica para procesar el mensaje de contacto, como enviar un correo electrónico al estudio fotográfico con los detalles del mensaje.

    // Redirigir al usuario de vuelta a la página de contacto con un mensaje de confirmación
    header("Location: contacto.php?success=true");
    exit();
} else {
    // Si no se envió el formulario correctamente, redirigir al usuario de vuelta a la página de contacto con un mensaje de error
    header("Location: contacto.php?success=false");
    exit();
}
?>
