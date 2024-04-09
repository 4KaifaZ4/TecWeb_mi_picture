<?php
// Verificar la sesión del administrador
session_start();
if (!isset($_SESSION['usuario'])) {
    // Si no hay una sesión de administrador activa, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Aquí deberías incluir la lógica para manejar las operaciones de administración, como la actualización de servicios y fotografías.

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administración - MY PICTURE</title>
  <!-- Estilos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Estilos CSS personalizados -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MY PICTURE - Panel de Administración</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Ver Sitio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Panel de Administración <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Contenido principal -->
  <div class="container">
    <h1>Bienvenido al Panel de Administración</h1>
    <!-- Aquí puedes agregar formularios u otras herramientas para administrar el contenido del portal -->
  </div>

  <!-- Scripts JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Script JavaScript personalizado -->
  <script src="scripts.js"></script>
</body>
</html>