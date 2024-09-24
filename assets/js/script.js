// script.js

document.getElementById('loginForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevenir el envío del formulario por defecto
  
  // Obtener valores de los campos de entrada
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  
  // Validar los campos (puedes añadir más validaciones según tus necesidades)
  if (email.trim() === '' || password.trim() === '') {
    alert('Por favor, complete todos los campos');
    return;
  }
  
  // Aquí puedes realizar una llamada a un servidor para autenticar al usuario
  // Por simplicidad, solo mostraremos un mensaje de alerta
  alert('Inicio de sesión exitoso');
});

