// Función para validar el formulario de pedidos
function validarPedido() {
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var mensaje = document.getElementById('mensaje').value;
  
    // Validar que todos los campos estén completos
    if (nombre === '' || correo === '' || mensaje === '') {
      alert('Por favor completa todos los campos del formulario.');
      return false;
    }
  
    // Validar formato del correo electrónico
    var correoRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!correo.match(correoRegex)) {
      alert('Por favor ingresa un correo electrónico válido.');
      return false;
    }
  
    // Si se pasa la validación, enviar el formulario
    alert('¡Pedido enviado correctamente!');
    return true;
  }
  
  // Asignar la función de validación al evento submit del formulario de pedidos
  document.getElementById('form-pedido').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe automáticamente
    validarPedido(); // Llamar a la función de validación
  });
  