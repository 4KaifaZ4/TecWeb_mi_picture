<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventos - MY PICTURE</title>
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
        <li class="nav-item active">
          <a class="nav-link" href="#">Eventos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="galeria.php">Galería de Fotos</a>
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
    <h1>Próximos Eventos</h1>
    <div class="row">
      <!-- Aquí se pueden listar los eventos próximos -->
      <div class="col-md-4">
        <div class="card">
          <img src="imagen_evento_1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nombre del Evento 1</h5>
            <p class="card-text">Descripción breve del evento.</p>
            <a href="#" class="btn btn-primary">Más información</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="imagen_evento_2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Nombre del Evento 2</h5>
            <p class="card-text">Descripción breve del evento.</p>
            <a href="#" class="btn btn-primary">Más información</a>
          </div>
        </div>
      </div>
      <!-- Se pueden agregar más eventos -->
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
