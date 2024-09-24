// script.js

document.getElementById('registerForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevenir el envío del formulario por defecto
  
  // Obtener valores de los campos de entrada
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var confirmPassword = document.getElementById('confirmPassword').value;
  
  // Validar los campos (puedes añadir más validaciones según tus necesidades)
  if (name.trim() === '' || email.trim() === '' || password.trim() === '' || confirmPassword.trim() === '') {
    alert('Por favor, complete todos los campos');
    return;
  }
  
  if (password !== confirmPassword) {
    alert('Las contraseñas no coinciden');
    return;
  }
  
  // Aquí puedes realizar una llamada a un servidor para registrar al usuario
  // Por simplicidad, solo mostraremos un mensaje de alerta
  alert('Registro exitoso');
});

