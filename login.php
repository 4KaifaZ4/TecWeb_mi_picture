<?php
session_start();

// Verificar si ya hay una sesión activa, en cuyo caso redirigir al usuario al panel de administración
if (isset($_SESSION['usuario'])) {
    header("Location: admin.php");
    exit();
}

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar las credenciales (aquí debes reemplazar con tu lógica de autenticación real)
    $usuario_valido = 'admin';
    $password_valido = 'contraseña';

    $usuario_ingresado = $_POST['usuario'];
    $password_ingresado = $_POST['password'];

    if ($usuario_ingresado === $usuario_valido && $password_ingresado === $password_valido) {
        // Si las credenciales son válidas, iniciar sesión y redirigir al usuario al panel de administración
        $_SESSION['usuario'] = $usuario_ingresado;
        header("Location: admin.php");
        exit();
    } else {
        // Si las credenciales no son válidas, mostrar un mensaje de error
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión - MY PICTURE</title>
  <!-- Estilos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Estilos CSS personalizados -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- Contenido principal -->
  <div class="container">
    <h1 class="text-center">Iniciar Sesión</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="col-lg-4 offset-lg-4 mt-5">
      <div class="form-group">
        <label for="usuario">Usuario:</label>
        <input type="text" class="form-control" id="usuario" name="usuario">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <?php if (isset($error)) { ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $error; ?>
        </div>
      <?php } ?>
      <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
    </form>
  </div>

  <!-- Scripts JavaScript de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
