<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galería de Fotos - MY PICTURE</title>
  <!-- Estilos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Estilos CSS personalizados -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MY PICTURE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eventos.php">Eventos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Galería de Fotos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pedidos.php">Pedidos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto.php">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Contenido principal -->
  <div class="container">
    <h1>Galería de Fotos</h1>
    <div class="row">
      <!-- Aquí se pueden listar las fotos de la galería -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="foto1.jpg" class="card-img-top" alt="Foto 1">
          <div class="card-body">
            <p class="card-text">Descripción de la foto 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="foto2.jpg" class="card-img-top" alt="Foto 2">
          <div class="card-body">
            <p class="card-text">Descripción de la foto 2.</p>
          </div>
        </div>
      </div>
      <!-- Se pueden agregar más fotos -->
    </div>
  </div>

  <!-- Scripts JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Script JavaScript personalizado -->
  <script src="scripts.js"></script>
</body>
</html>
